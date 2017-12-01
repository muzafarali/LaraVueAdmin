<template>
    <form @submit.prevent="proceed">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Title</label>
                    <input class="form-control" type="text" value="" v-model="eventForm.title">
                </div>
                <div class="form-group" v-if="id">
                    <label for="">Progress ({{eventForm.progress}}%)</label><br />
                    <range-slider class="slider" min="0" max="100" step="1" v-model="eventForm.progress" @change="sliderChange"></range-slider>
                </div>
                <div class="form-group">
                    <label for="">Start Date</label>
                    <datepicker v-model="eventForm.start_date" :bootstrapStyling="true"></datepicker>
                </div>
                <div class="form-group">
                    <label for="">Due Date</label>
                    <datepicker v-model="eventForm.due_date" :bootstrapStyling="true"></datepicker>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" type="text" value="" v-model="eventForm.description" rows="10"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">
            <span v-if="id">Update</span>
            <span v-else>Save</span>
        </button>
        <router-link to="/event" class="btn btn-danger waves-effect waves-light m-t-10" v-show="id">Cancel</router-link>
    </form>
</template>


<script>
    import datepicker from 'vuejs-datepicker'
    import RangeSlider from 'vue-range-slider'
    import 'vue-range-slider/dist/vue-range-slider.css'
    import helper from '../../../services/helper'

    export default {
        data() {
            return {
                eventForm: new Form({
                    'title' : '',
                    'description' : '',
                    'start_date' : '',
                    'due_date' : '',
                    'progress' : 0
                })
            };
        },
        components : { datepicker,RangeSlider },
        props: ['id'],
        mounted() {
            if(this.id)
                this.getEvents();
        },
        methods: {
            sliderChange(value){
                this.eventForm.progress = value;
            },
            proceed(){
                this.eventForm.start_date = moment(this.eventForm.start_date).format('YYYY-MM-DD');
                this.eventForm.due_date = moment(this.eventForm.due_date).format('YYYY-MM-DD');
                if(this.id)
                    this.updateEvent();
                else
                    this.storeEvent();
            },
            storeEvent(){
                this.eventForm.post('/api/event')
                .then(response => {
                    toastr['success'](response.message);
                    this.$emit('completed',response.event)
                })
                .catch(response => {
                    toastr['error'](response.message);
                });
            },
            getEvents(){
                axios.get('/api/event/'+this.id)
                .then(response => {
                    this.eventForm.title = response.data.title;
                    this.eventForm.description = response.data.description;
                    this.eventForm.start_date = response.data.start_date;
                    this.eventForm.due_date = response.data.due_date;
                    this.eventForm.progress = response.data.progress;
                })
                .catch(response => {
                    toastr['error'](response.message);
                });
            },
            updateEvent(){
                this.eventForm.patch('/api/event/'+this.id)
                .then(response => {
                    if(response.type == 'error')
                        toastr['error'](response.message);
                    else {
                        this.$router.push('/admin/event');
                    }
                })
                .catch(response => {
                    toastr['error'](response.message);
                });
            }
        }
    }
</script>
<style>
    .slider{
        width: 100%;
    }
</style>
