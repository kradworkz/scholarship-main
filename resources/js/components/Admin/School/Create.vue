<template>
<div class="d-xl-flex">                
    <div class="w-100">
        <div class="card">
            <div class="card-body" :style="{ height: height + 'px' }">
                <div class="row customerform" style="margin-right: 10px; margin-left: 10px;">
                    <div class="col-md-12" style="margin-top: 20px;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>School Name: <span v-if="errors.name" class="haveerror">({{ errors.name[0] }})</span></label>
                                    <input type="text" class="form-control" v-model="name" style="text-transform: capitalize;">
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label>Class: <span v-if="errors.klas" class="haveerror">({{ errors.klas[0] }})</span></label>
                                        <multiselect 
                                        v-model="klas" 
                                        :options="klases"
                                        :allow-empty="false"
                                        :show-labels="false"
                                         label="name" track-by="id"
                                        placeholder="Select Class">
                                    </multiselect>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Term type: <span v-if="errors.term" class="haveerror">({{ errors.term[0] }})</span></label>
                                    <multiselect 
                                        v-model="term" 
                                        :options="terms"
                                        :allow-empty="false"
                                        :show-labels="false"
                                         label="name" track-by="id"
                                        placeholder="Select Term type">
                                    </multiselect>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-top: -10px;">
                                <div class="form-group">
                                    <label>Region: <span v-if="errors.region" class="haveerror">({{ errors.region[0] }})</span></label>
                                        <multiselect 
                                        @input="onChangeRegion(region.code)"
                                        v-model="region" 
                                        :options="regions"
                                        :allow-empty="false"
                                        :show-labels="false"
                                        label="region" track-by="code"
                                        placeholder="Select Region">
                                    </multiselect>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-top: -10px;">
                                <div class="form-group">
                                    <label>Province: <span v-if="errors.province" class="haveerror">({{ errors.province[0] }})</span></label>
                                        <multiselect 
                                        @input="onChangeProvince(province.code)"
                                        v-model="province" 
                                        :options="provinces"
                                        :allow-empty="false"
                                        :show-labels="false"
                                        label="name" track-by="code"
                                        placeholder="Select Province">
                                    </multiselect>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-top: -10px;">
                                <div class="form-group">
                                    <label>Municipality: <span v-if="errors.municipality" class="haveerror">({{ errors.municipality[0] }})</span></label>
                                        <multiselect 
                                        v-model="municipality" 
                                        :options="municipalities"
                                        :allow-empty="false"
                                        :show-labels="false"
                                        label="name" track-by="code"
                                        placeholder="Select Municipality">
                                    </multiselect>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-top: -10px;">
                                <div class="form-group">
                                    <label>Address: <span v-if="errors.address" class="haveerror">({{ errors.address[0] }})</span></label>
                                    <input type="text" class="form-control" v-model="address" style="text-transform: capitalize;">
                                </div>
                            </div>

                            <div class="col-md-12"><hr></hr></div>
                            <div class="col-md-12"> 
                                <button @click="add" style="margin-top: -55px;" class="btn btn-sm btn-primary pull-right" type="button">Add Campus</button>
                            </div>
                            <div class="col-md-12" v-for="(list , index) in lists" v-bind:key="'a-'+list.id+index">
                                <div class="row">
                                    <div class="col-md-3" style="margin-top: -10px;">
                                        <div class="form-group">
                                            <label>Region: <span v-if="errors['lists.'+index+'.region']" class="haveerror">({{( errors['lists.'+index+'.region'][0] )}})</span></label>
                                                <multiselect 
                                                @input="onChangeRegion(region.code)"
                                                v-model="list.region" 
                                                :options="regions"
                                                :allow-empty="false"
                                                :show-labels="false"
                                                label="region" track-by="code"
                                                placeholder="Select Region">
                                            </multiselect>
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="margin-top: -10px;">
                                        <div class="form-group">
                                            <label>Province: <span v-if="errors['lists.'+index+'.province']" class="haveerror">({{( errors['lists.'+index+'.province'][0] )}})</span></label>
                                                <multiselect 
                                                @input="onChangeProvince(province.code)"
                                                v-model="list.province" 
                                                :options="provinces"
                                                :allow-empty="false"
                                                :show-labels="false"
                                                label="name" track-by="code"
                                                placeholder="Select Province">
                                            </multiselect>
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="margin-top: -10px;">
                                        <div class="form-group">
                                            <label>Municipality: <span v-if="errors['lists.'+index+'.municipality']" class="haveerror">({{( errors['lists.'+index+'.municipality'][0] )}})</span></label>
                                                <multiselect 
                                                v-model="list.municipality" 
                                                :options="municipalities"
                                                :allow-empty="false"
                                                :show-labels="false"
                                                label="name" track-by="code"
                                                placeholder="Select Municipality">
                                            </multiselect>
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="margin-top: -10px;">
                                    
                                        <button type="button" @click="remve(index)" class="btn btn-danger waves-effect waves-light mr-2 float-right" style="margin-top:19px;">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                        <div class="form-group" style="width: 80%;">
                                            <label>Address: <span v-if="errors.address" class="haveerror">({{ errors.address[0] }})</span></label>
                                            <input type="text" class="form-control" v-model="address" style="text-transform: capitalize;">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    import Multiselect from 'vue-multiselect';
    export default {
        data(){
            return {
                currentUrl: window.location.origin,
                windowHeight: window.innerHeight,
                windowWidth: window.innerWidth,
                errors: [],
                pagination: {},
                keyword: '',
                lists : [],
                name: '',
                regions: [],
                provinces: [],
                municipalities: [],
                terms: [],
                klases: [],
                region: '',
                province: '',
                municipality: '',
                address: '',
                term: '',
                klas: '',
                lists: []
            }
        },

        computed : {
            height: function() {
                return this.windowHeight -180;
            },
            counts: function(){
                return Math.floor((this.height - 125) / 54);
            }
        }, 

        created(){
            this.fetchRegion();
            this.fetchTerm();
            this.fetchKlases();
        },  

        methods : {
            fetchKlases(){
                axios.get(this.currentUrl + '/request/dropdowns/Class/-')
                .then(response => {
                    this.klases = response.data.data;
                })
                .catch(err => console.log(err));
            },

            fetchTerm(){
                axios.get(this.currentUrl + '/request/dropdowns/Term Type/-')
                .then(response => {
                    this.terms = response.data.data;
                })
                .catch(err => console.log(err));
            },

            fetchRegion(){
                axios.get(this.currentUrl + '/request/location/regions')
                .then(response => {
                    this.regions = response.data.data;
                })
                .catch(err => console.log(err));
            },

            fetchProvince($id){
                axios.get(this.currentUrl + '/request/location/provinces/'+$id)
                .then(response => {
                    this.provinces = response.data.data;
                })
                .catch(err => console.log(err));
            },

            fetchMunicipality($id){
                axios.get(this.currentUrl + '/request/location/municipalities/'+$id)
                .then(response => {
                    this.municipalities = response.data.data;
                })
                .catch(err => console.log(err));
            },

            onChangeRegion($id) {
                this.fetchProvince($id);
                this.province = '';
                this.municipality = '';
            },

            onChangeProvince($id) {
                this.fetchMunicipality($id);
                this.municipality = '';
            },

            remve(index){
                this.lists.splice(index, 1);
            },

            add() {
                // if(this.lists.length <= this.total){
                //     if(typeof this.lists[this.lists.length-1].location !== 'undefined'){
                //         this.lists.push({quantity: 1})
                //     }
                // }
                this.lists.push({region : ''})
            },
        }, components : { Multiselect }
    }
</script>
