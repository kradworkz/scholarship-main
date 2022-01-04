<template>
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add School Campus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form @submit.prevent="create">
                <div class="modal-body">
                    
                    <div class="row customerform" style="margin-right: 10px; margin-left: 10px;">
                        <div class="col-md-12 customerform" style="margin-top: 10px;">
                            <div class="row">
                                <div class="col-md-4" style="margin-top: -10px;">
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
                                <div class="col-md-4" style="margin-top: -10px;">
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
                                <div class="col-md-4" style="margin-top: -10px;">
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
                                <div class="col-md-8" style="margin-top: -15px;">
                                    <div class="form-group">
                                        <label>Address: <span v-if="errors.address" class="haveerror">({{ errors.address[0] }})</span></label>
                                        <input type="text" class="form-control" v-model="address" style="text-transform: capitalize;">
                                    </div>
                                </div>
                                <div class="col-md-4" style="margin-top: -15px;">
                                    <div class="form-group">
                                        <label>Campus name: <span v-if="errors.campus" class="haveerror">({{ errors.campus[0] }})</span></label>
                                        <input type="text" class="form-control" v-model="campus" style="text-transform: capitalize;">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: 5px;">         
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" v-model="junior" class="custom-control-input" id="formrow-junior">
                                            <label class="custom-control-label font-size-12" for="formrow-junior">Has Junior School?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: 5px;">         
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" v-model="senior" class="custom-control-input" id="formrow-senior">
                                            <label class="custom-control-label font-size-12" for="formrow-senior">Has Senior School?</label>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: 5px;">         
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" v-model="tertiary" class="custom-control-input" id="formrow-tertiary">
                                            <label class="custom-control-label font-size-12" for="formrow-tertiary">Has Tertiary?</label>
                                        </div>
                                    </div>
                                </div>                      
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><span v-if="editable == true">Update</span><span v-else>Create</span></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
            <loading :active.sync="isLoading" :can-cancel="false" loader="dots" background-color="black" :is-full-page="fullPage"></loading>

        </div>
    </div>
</template>

<script>
    import Loading from 'vue-loading-overlay';
    import Multiselect from 'vue-multiselect';
    export default {
        props : ['code'],
        data(){
            return {
                currentUrl: window.location.origin,
                errors: [], 
                regions: [],
                provinces: [],
                municipalities: [],
                editable: false,
                isLoading: false,
                fullPage: true,
                address: '',
                id: '',
                campus: '',
                region: '',
                province: '',
                municipality: '',
                junior: false,
                senior: false,
                tertiary: false
            }
        },

        created(){
            this.fetchRegion();
        },
        
        methods : {
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

            create(){
                this.isLoading = true;
                axios.post(this.currentUrl + '/request/campus/store', {
                    id: this.id,
                    code: this.code,
                    campus: this.campus,
                    address: this.address,
                    is_main : false,
                    municipality_code: this.municipality.code,
                    has_jhs: this.junior,
                    has_shs: this.senior,
                    has_tertiary: this.tertiary,
                    editable: this.editable
                })
                .then(response => {
                    this.$emit('status', response.data.data);
                    this.clear();
                    this.isLoading = false;
                })
                .catch(error => {
                    if (error.response.status == 422) {
                        this.errors = error.response.data.errors;
                         this.isLoading = false;
                    }
                });
            },

            edit(list,editable){
                this.id = list.id,
                this.address = list.address,
                this.campus = list.campus,
                this.municipality = list.municipality,
                this.province = list.municipality.province,
                this.region = list.municipality.province.region,
                this.editable = editable;
            },

            clear(){
                this.editable = false;
                $("#campus").modal("hide");
                this.address = '';
                this.campus = '';
                this.errors = [];
            },

            new(){
                this.region = '';
                this.province = '';
                this.municipality = '';
            }

        }, components: { Multiselect, Loading }
    }
</script>