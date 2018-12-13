<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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
        props: [
            'urldata'
        ],
        mounted() {
            // console.log('Component mounted.')
            this.update()
        },
        methods: {
            update: function () {
                // console.log(this.urldata);
            }
        }
    }
</script>

<style>
    table, tr, td{
        border-collapse: collapse;
    }
</style>