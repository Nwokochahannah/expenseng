<template>
    <div class="d-flex flex-wrap w-100">
        <div class="exp-card" v-for="card in cards" :key="card">
            <div class="graph-cont">
                <chart :element="card.toLowerCase()" :label="card" 
                        :data="series[card.toLowerCase()].data"></chart>
            </div>
            <p class="exp-card1">{{ card }}</p>
            <p class="exp-card2">
                {{ 
                    "₦" + Number((series[card.toLowerCase()].total.reduce( (a,b) => a+b, 0)).toFixed(1)).toLocaleString()
                 }}
            </p>
            <p class="exp-card3">{{ new Date().getFullYear() }}</p>
        </div>
    </div>
</template>

<script>
import Chart from '../Payments/Chart';

export default {
    data() {
        return {
            cards: [],
            series: {
                health: {
                    data: [],
                    total: [],
                },
                defence: {
                    data: [],
                    total: [],
                },
                housing: {
                    data: [],
                    total: []
                },
                education: {
                    data: [],
                    total: []
                },
            },
        }
    },    
    
    components:{
        Chart
    },

    mounted() {
        axios.get('/api/expense/health')
            .then(response => {
                response.data.forEach(element => {
                    this.cards.push(element.label); 
                    if(element.label == "Health"){
                        element.data.map(item => {  
                            this.series.health.total.push(item.amount);
                            this.series.health.data.push({amount: item.amount, year: item.year})
                        })
                    }
                    if(element.label == "Defence"){
                        element.data.map(item => {  
                            this.series.defence.total.push(item.amount);
                            this.series.defence.data.push({amount: item.amount, year: item.year})
                        })
                    }
                    if(element.label == "Housing"){
                        element.data.map(item => { 
                            this.series.housing.total.push(item.amount);
                            this.series.housing.data.push({amount: item.amount, year: item.year})
                        })
                    }      
                    if(element.label == "Education"){
                        element.data.map(item => { 
                            this.series.education.total.push(item.amount);
                            this.series.education.data.push({amount: item.amount, year: item.year})
                        })
                    }                    
                });
                this.data = response.data;
            }).catch(err => {
                console.log(err);
            })
    },

    computed: {
        
    },
}
</script>