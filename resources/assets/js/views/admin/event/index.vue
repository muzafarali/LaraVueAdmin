<template>
	<div>
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Task</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><router-link to="/home">Home</router-link></li>
                    <li class="breadcrumb-item active">Task</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add new Task</h4>
                        <event-form @completed="getEvents"></event-form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Filter Task</h4>

                        <div class="row m-t-40">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input name="title" class="form-control" v-model="filterEventForm.title" @blur="getEvents">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" class="form-control" v-model="filterEventForm.status" @change="getEvents">
                                        <option value="">All</option>
                                        <option value="1">Completed</option>
                                        <option value="0">Incompleted</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Sort By</label>
                                    <select name="sortBy" class="form-control" v-model="filterEventForm.sortBy" @change="getEvents">
                                        <option value="title">Title</option>
                                        <option value="start_date">Start Date</option>
                                        <option value="due_date">Due Date</option>
                                        <option value="status">Status</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Order</label>
                                    <select name="order" class="form-control" v-model="filterEventForm.order" @change="getEvents">
                                        <option value="asc">Asc</option>
                                        <option value="desc">Desc</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h4 class="card-title">Task List</h4>
                        <h6 class="card-subtitle" v-if="events.total">Total {{events.total}} result found!</h6>
                        <h6 class="card-subtitle" v-else>No result found!</h6>
                        <div class="table-responsive">
                            <table class="table" v-if="events.total">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th style="width:180px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="event in events.data">
                                        <td v-text="event.title"></td>
                                        <td>{{ event.start_date | moment }}</td>
                                        <td>{{ event.due_date | moment }}</td>
                                        <td>
                                            <div class="progress" style="height: 10px;">
                                                <div :class="getProgressColor(event)" role="progressbar" :style="getProgress(event)" aria-valuenow="event.progress" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            {{ event.progress }} %
                                        </td>
                                        <td v-html="getEventStatus(event)"></td>
                                        <td v-text="event.description"></td>
                                        <td>
                                            <button class="btn btn-info btn-sm" @click.prevent="editEvent(event)" data-toggle="tooltip" title="Edit Task"><i class="fa fa-pencil"></i></button>
                                            <button v-if="event.status" class="btn btn-danger btn-sm" @click.prevent="toggleEventStatus(event)" data-toggle="tooltip" title="Mark as Incomplete"><i class="fa fa-times"></i></button>
                                            <button v-else class="btn btn-success btn-sm" @click.prevent="toggleEventStatus(event)" data-toggle="tooltip" title="Mark as Complete"><i class="fa fa-check"></i></button>
                                            <click-confirm yes-class="btn btn-success" no-class="btn btn-danger">
                                                <button class="btn btn-danger btn-sm" @click.prevent="deleteEvent(event)" data-toggle="tooltip" title="Delete task"><i class="fa fa-trash"></i></button>
                                            </click-confirm>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row">
                                <div class="col-md-8">
                                    <pagination :data="events" :limit=3 v-on:pagination-change-page="getEvents"></pagination>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right">
                                        <select name="pageLength" class="form-control" v-model="filterEventForm.pageLength" @change="getEvents" v-if="events.total">
                                            <option value="5">5 per page</option>
                                            <option value="10">10 per page</option>
                                            <option value="25">25 per page</option>
                                            <option value="100">100 per page</option>
                                        </select>
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
    import EventForm from './form'
    import pagination from 'laravel-vue-pagination'
    import helper from '../../../services/helper'
    import ClickConfirm from 'click-confirm'

    export default {
        components : { EventForm, pagination, ClickConfirm },
        data() {
            return {
              events: {},
              filterEventForm: {
                    sortBy : 'start_date',
                    order: 'desc',
                    status: '',
                    title: '',
                    pageLength: 5
                }
            }
        },

        created() {
            this.getEvents();
        },

        methods: {
            getEvents(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }
                let url = helper.getFilterURL(this.filterEventForm);
                axios.get('/api/event?page=' + page + url)
                    .then(response => this.events = response.data );
            },
            getProgress(event){
                return 'width: '+event.progress+'%;';
            },
            getProgressColor(event){
                return helper.taskColor(event.progress);
            },
            deleteEvent(event){
                axios.delete('/api/event/'+event.id).then(response => {
                    toastr['success'](response.data.message);
                    this.getEvents();
                }).catch(error => {
                    toastr['error'](error.response.data.message);
                });
            },
            editEvent(event){
                this.$router.push('/admin/event/'+event.uuid+'/edit');
            },
            getEventStatus(event){
                return (event.status) ? '<span class="label label-success">Completed</span>' : '<span class="label label-danger">Pending</span>';
            },
            toggleEventStatus(event){
                axios.post('/api/event/status',{id:event.id}).then((response) => {
                    this.getEvents();
                });
            }
        },
        filters: {
          moment(date) {
            return helper.formatDate(date);
          }
        }
    }
</script>
