<template>
<div class="col-md-12">
    <div class="row mb-3">
        <div class="col-xl-6 col-sm-6 form-inline">
            <button @click="sync" type="button" class="btn btn-danger waves-effect waves-light mr-2"><i class='bx bx-sync'></i></button>
            <form class="float-sm-right form-inline">
                <div class="search-box">
                    <div class="position-relative">
                        <input type="text" class="form-control bg-light border-light rounded" placeholder="Search..." v-model="keyword" @keyup="fetch()">
                        <i class='bx bx-search-alt search-icon'></i>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xl-6 col-sm-6">
            <ul class="list-inline user-chat-nav text-right mb-0 dropdown">
                <li class="list-inline-item d-none d-sm-inline-block font-size-12">
                    {{(pagination.current_page == 1) ? '1' : ((pagination.current_page -1) * pagination.per_page) + 1 }}-{{(pagination.last_page == pagination.current_page) ? pagination.total : pagination.current_page * pagination.per_page }} of {{pagination.total}}
                </li>
                <li class="list-inline-item d-none d-sm-inline-block">
                    <a class="btn nav-btn" v-bind:class="[{disabled: !pagination.prev_page_url}]" @click="fetch(pagination.prev_page_url)">
                        <i class='bx bxs-chevron-left font-size-16'></i>
                    </a>
                </li>
                <li class="list-inline-item d-none d-sm-inline-block">
                    <a class="btn nav-btn" v-bind:class="[{disabled: !pagination.next_page_url}]" @click="fetch(pagination.next_page_url)">
                        <i class='bx bxs-chevron-right font-size-16'></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-centered table-nowrap">
            <thead class="thead-light">
                <tr class="font-size-11">
                    <th>Code</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Old Name</th>
                    <th class="text-center">Province Code</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="list in lists" v-bind:key="list.id">
                    <td>{{list.code}}</td>
                    <td class="text-center">{{list.name}}</td>
                    <td class="text-center">{{ (list.old_name == NULL) ? 'n/a' : list.old_name }}</td>
                    <td class="text-center">{{list.province_code}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="modal fade exampleModal" id="sync" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <location-sync ref="sync"></location-sync>
    </div>
    <loading :active.sync="isLoading" :can-cancel="false" loader="dots" background-color="black" :is-full-page="fullPage"></loading>
</div>
</template>

<script>
    import Loading from 'vue-loading-overlay';
    export default {
        data(){
            return {
                currentUrl: window.location.origin,
                height: this.$parent.$parent.$parent.height,
                pagination: {},
                keyword: '',
                isLoading: false,
                fullPage: true,
                lists: [],
                locations: []
            }
        },

        created(){
            this.fetch();
        },

        computed:{
            counts: function(){
                return Math.floor((this.height - 175) / 40);
            }
        },

        methods : {
            makePagination(meta, links) {
                let pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev,
                    total: meta.total,
                    per_page: meta.per_page,
                };
                this.pagination = pagination;
            },

            fetch(page_url){
                let vm = this; let key;
                (this.keyword != '' && this.keyword != null) ? key = this.keyword : key = '-';
                page_url = page_url || this.currentUrl + '/request/location/municipalities/'+this.counts+'/'+key;
                axios.get(page_url)
                .then(response => {
                    this.lists = response.data.data;
                    vm.makePagination(response.data.meta, response.data.links);
                })
                .catch(err => console.log(err));
            },

            sync(){
                this.isLoading = true;
                axios.get(this.currentUrl + '/request/municipalities/fetch')
                .then(response => {
                    this.locations = response.data;
                    this.$refs.sync.set(this.locations,'municipalities');
                    this.isLoading = false;
                    $("#sync").modal('show');
                })
                .catch(err => console.log(err));
                
            }
        }, components : { Loading }
    }
</script>
