<template>
<div class="d-xl-flex">                
    <div class="w-100">
        <div class="card">
            <div class="card-body" :style="{ height: height + 'px' }">
                <div class="row mb-3">
                    <div class="col-md-12">
                      <button @click="add" type="button" class="btn btn-danger waves-effect waves-light float-right" style="margin-top: -10px;"><i class='bx bx-plus-medical'></i></button>
                      
                        <h5 class="text-primary">{{ list.name }} <span class="text-muted"> - Campuses</span></h5>
                        <hr></hr>
                    </div>
                    <div class="col-xl-6 col-sm-6 form-inline">
                        
                    </div>
                </div>
                <simplebar :style="{ height: (height - 105) + 'px' }">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap">
                            <tbody>
                                <tr v-for="list in list.campuses" v-bind:key="list.id">
                                    <td>
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle">{{list.campus.charAt(0)}}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="font-size-13 mb-1 text-dark">{{list.campus}} Campus</h5>
                                    </td>
                                    <td class="text-center">{{list.address}}, {{list.municipality.name}}, {{list.municipality.province.name}}</td>
                                    <td class="text-center">{{ (list.is_main == 1) ? 'Main Campus' : 'Campus' }}</td>
                                    <td class="text-right">
                                        <a class="mr-3 text-warning" @click="edit(list)"><i class='bx bx-edit-alt' ></i></a>
                                        <a class="text-danger"><i class='bx bx-trash'></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </simplebar>

                <div class="modal fade exampleModal" id="campus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <school-campus @status="message" :code="$route.params.id"  ref="create"></school-campus>
                </div>

            </div>
        </div>
    </div>
</div>
</template>

<script>
import simplebar from 'simplebar-vue';
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            windowHeight: window.innerHeight,
            windowWidth: window.innerWidth,
            errors: [],
            pagination: {},
            keyword: '',
            list: {}
        }
    },

    computed : {
        height: function() {
            return this.windowHeight -185;
        },
        counts: function(){
            return Math.floor((this.height - 125) / 54);
        }
    },

    created(){
        this.fetch();
    },

    methods: {

        fetch(){
            axios.get(this.currentUrl + '/request/school/'+this.$route.params.id)
            .then(response => {
                this.list = response.data.data;
            })
            .catch(err => console.log(err));
        },

        add(){
            this.$refs.create.clear();
            this.$refs.create.new();
            $("#campus").modal('show');
        },

        edit(list){
            this.editable = true;
            $("#campus").modal('show');
            this.$refs.create.edit(list,true);
        },

        message(list){
            if(list){
                if(this.editable == true){
                    let index = this.list.campuses.findIndex(u => u.id === list.id);
                    this.$set(this.list.campuses, index, list);
                    Vue.$toast.success('<strong>Successfully Updated</strong>', {
                        position: 'bottom-right'
                    });
                }else{
                    this.list.campuses.unshift(list);
                    Vue.$toast.success('<strong>Successfully Created</strong>', {
                        position: 'bottom-right'
                    });
                }
                $("#campus").modal('hide');
                this.editable = false;
            }
        },

    }, components : { simplebar }
}
</script>