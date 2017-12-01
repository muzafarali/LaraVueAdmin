<template>
	<div>
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Add Event</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><router-link to="/home">Home</router-link></li>
                    <li class="breadcrumb-item"><router-link to="/event">Event</router-link></li>
                    <li class="breadcrumb-item active">Add Event</li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Event</h4>
                        <event-form :id="id"></event-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import EventForm from './form';
    import helper from '../../../services/helper'

    export default {
        components : { EventForm },
        /*data() {
            return {
                id:this.$route.params.id
            }
        }*/
    }
</script>