<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button @click="updated" class="btn btn-default test mb-1">Update - {{id}}...</button>
                    <span class="badge badge-primary mb-1" v-if="is_refresh">Updating...</span>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Link</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="url in urldata">
                            <td>{{url.title}}</td>
                            <td>{{url.link}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                urldata: [],
                is_refresh: false,
                id: 0
            }
        },
        methods: {
            updated: function (e) {
                console.log('Component mounted.');
            }
        }
    }
</script>
