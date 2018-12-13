<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <line-chart :chart-data="data" :height="100" :option="{responsive: true, maintainAspectRation: true}"></line-chart>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import LineChart from './LineChart.js'
    window.axios = require('axios');

    export default {
        components: {
            LineChart
        },
        data: function () {
            return {
                data: [],
            }
        },
        mounted() {
              this.update()
        },
        methods: {
            update: function () {
                axios.get('/chart-data').then((response) => {
                    console.log(response);
                    this.data = response.data
                });
            }
        }
    }
</script>
