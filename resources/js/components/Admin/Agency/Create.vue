<template>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Course Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form @submit.prevent="create">
                <div class="modal-body">
                    
                    <div class="row customerform" style="margin-right: 10px; margin-left: 10px;">
                        <div class="col-md-12 customerform" style="margin-top: 5px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name: <span v-if="errors.name" class="haveerror">({{ errors.name[0] }})</span></label>
                                        <input type="text" class="form-control" v-model="name" style="text-transform: capitalize;">
                                    </div>
                                </div>    
                                <div class="col-md-6" style="margin-top: -12px;">
                                    <div class="form-group">
                                        <label>Acronym: <span v-if="errors.acronym" class="haveerror">({{ errors.acronym[0] }})</span></label>
                                        <input type="text" class="form-control" v-model="acronym" style="text-transform: uppercase;">
                                    </div>
                                </div>  
                                <div class="col-md-6" style="margin-top: -12px;">
                                    <div class="form-group">
                                        <label>Code: <span v-if="errors.code" class="haveerror">({{ errors.code[0] }})</span></label>
                                        <input type="text" class="form-control" v-model="code" style="text-transform: uppercase;">
                                    </div>
                                </div>  
                                <div class="col-md-12" style="margin-top: -12px;">
                                    <div class="form-group">
                                        <label>Website: <span v-if="errors.website" class="haveerror">({{ errors.website[0] }})</span></label>
                                        <input type="text" class="form-control" v-model="website" style="text-transform: lowercase;">
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary"><span v-if="editable == true">Update</span><span v-else>Create</span></button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
            <loading :active.sync="isLoading" :can-cancel="false" loader="dots" background-color="black" :is-full-page="fullPage"></loading>

        </div>
    </div>
</template>

<script>
    import Loading from 'vue-loading-overlay';
    export default {
        data(){
            return {
                currentUrl: window.location.origin,
                errors: [], 
                editable: false,
                isLoading: false,
                fullPage: true,
                id: '',
                name: '',
                code: '',
                acronym: '',
                website: ''
            }
        },
        
        methods : {
            create(){
                this.isLoading = true;
                axios.post(this.currentUrl + '/request/agency/store', {
                    id: this.id,
                    name: this.name,
                    code: this.code,
                    acronym: this.acronym,
                    website: this.website,
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
                    }else{
                        this.isLoading = false;
                        Vue.$toast.error('<strong>Please contact Administrator</strong>', {
                        position: 'bottom-right'
                    });
                    }
                });
            },

            edit(list,editable){
                this.id = list.id;
                this.name = list.name;
                this.code = list.code;
                this.acronym = list.acronym;
                this.editable = editable;
            },

            clear(){
                this.editable = false;
                $("#new").modal("hide");
                this.errors = [];
                this.name = '';
            },

        }, components: { Loading }
    }
</script>