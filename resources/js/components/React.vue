<template>
    <div>
        <span class="meta-icons mr-3">
          <a  class="mr-2" @click.prevent="starReact">
             <span class="icon-star text-warning">
             </span>
            </a> {{stars.star}}
        </span>
        <span class="meta-icons wishlist">
           <a  @click.prevent ="loveReact" class="mr-2">
             <span class="icon-heart">
               </span>
            </a> {{loveR}}
        </span>
    </div>
</template>

<script>
    export default {

        props: {
            id: {
                required: true
            }
        },
        data(){
            return{
                
                loveR: [],
                starR: [],
                loves:[],
                stars:[],
                star: 0,
                love: 0,
            }

            },
        created() {
            this.getLove();
            this.getStar();
            this.starFilter();
            this.loveFilter();
          
        },

        methods: {
            starReact() {
                axios.put(`api/stars/1`, {
                    love: this.star += 1,
                    item_id: this.id
                    })
                    .then(response => {
                        this.starR = response.data
                    })
                    .catch(e => {
                    this.errors.push(e)
                    })
            },

            loveReact() {
                axios.put(`api/loves/1`, {
                    love:this.love += 1,
                    item_id: this.id
                     })
                        .then(response => {
                            this.loveR = response.data
                        })
                        .catch(e => {
                        this.errors.push(e)
                    })
            },

            getLove(){
                axios.get('api/loves').then((res)=>{
                 this.loveR = res.data
                })
            },

            getStar(){
                axios.get('api/stars').then((res)=>{
                 this.starR = res.data
                })
            },
            loveFilter() {
                 this.loves = this.loveR.filter(function(love){ return love.item_id == this.id});
            },
            starFilter() {
                this.stars = this.starR.filter(function(star){ return star.item_id == this.id});
            }
        }
    }
</script>