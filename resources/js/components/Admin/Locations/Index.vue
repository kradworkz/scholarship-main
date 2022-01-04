<template>
    <div>
        <div class="d-lg-flex">
            <div class="chat-leftsidebar mr-lg-4">
                <div class="">
                    <div @click="selected = 1"  class="card border shadow-none"  style="margin-bottom: 4px;">
                        <router-link :to="{ path: '/locations' }" class="text-body">
                            <div class="p-1">
                                <div class="d-flex mt-1">
                                    <div class="avatar-xs align-self-center ml-2 mr-2">
                                        <div class="avatar-title rounded bg-transparent">
                                            <i class='text-warning bx bx-home h4 mt-1'></i>
                                        </div>
                                    </div> 
                                    <div class="overflow-hidden mr-auto align-self-center">
                                        <h5 class="font-size-12 text-truncate mt-1" :class="(selected == 1) ? 'text-primary' : ''">Home</h5> 
                                    </div>
                                </div>
                            </div>
                        </router-link>
                    </div>

                    <div @click="selected = 2" class="card border shadow-none"  style="margin-bottom:4px;">
                        <router-link :to="{ name: 'regions',  params: {data : user }}" class="text-body">
                            <div class="p-1">
                                <div class="d-flex mt-1">
                                    <div class="avatar-xs align-self-center ml-2 mr-2">
                                        <div class="avatar-title rounded bg-transparent">
                                            <i class='text-primary bx bx-user-circle h4 mt-1'></i>
                                        </div>
                                    </div> 
                                    <div class="overflow-hidden mr-auto align-self-center">
                                        <h5 class="font-size-12 text-truncate mt-1" :class="(selected == 2) ? 'text-primary' : ''">Regions</h5> 
                                    </div>
                                </div>
                            </div>
                        </router-link>
                    </div>

                    <div @click="selected = 3" class="card border shadow-none"  style="margin-bottom: 4px;">
                        <router-link :to="{ name: 'provinces'}" class="text-body">
                            <div class="p-1">
                                <div class="d-flex mt-1">
                                    <div class="avatar-xs align-self-center ml-2 mr-2">
                                        <div class="avatar-title rounded bg-transparent">
                                            <i class='text-danger bx bx-money h4 mt-1'></i>
                                        </div>
                                    </div> 
                                    <div class="overflow-hidden mr-auto align-self-center">
                                        <h5 class="font-size-12 text-truncate mt-1" :class="(selected == 3) ? 'text-primary' : ''">Province</h5> 
                                    </div>
                                </div>
                            </div>
                        </router-link>
                    </div>

                    <div @click="selected = 4" class="card border shadow-none"  style="margin-bottom: 4px;">
                       <router-link :to="{ name: 'municipalities' }" class="text-body">
                            <div class="p-1">
                                <div class="d-flex mt-1">
                                    <div class="avatar-xs align-self-center ml-2 mr-2">
                                        <div class="avatar-title rounded bg-transparent">
                                            <i class='text-success bx bxs-school h4 mt-1'></i>
                                        </div>
                                    </div> 
                                    <div class="overflow-hidden mr-auto align-self-center">
                                        <h5 class="font-size-12 text-truncate mt-1" :class="(selected == 4) ? 'text-primary' : ''">Municipalities</h5> 
                                    </div>
                                </div>
                            </div>
                        </router-link>
                    </div>
                </div>
            </div>
            <div class="w-100 user-chat">
                <div class="card" :style="{ height: height + 'px' }">
                    <div class="p-4">
                        <div class="row">
                           <!-- <transition name="fade" :duration="1000"> -->
                                <router-view :user="user"></router-view>
                           <!-- </transition> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                currentUrl: window.location.origin,
                height: this.$parent.$parent.height,
                user: {
                    status_id: {}
                },
                selects : [],
                selected: 1,
            }
        }
    }
</script>

<style>
.fade-enter-active, .fade-leave-active {
  transition-property: opacity;
  transition-duration: .25s;
}

.fade-enter-active {
  transition-delay: .25s;
}

.fade-enter, .fade-leave-active {
  opacity: 0
}
.page {
    position: fixed;
    width: 91%;
}
</style>
