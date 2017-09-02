<template>
    <div class="col-sm-3 col-md-3" style="height: 300px">
        <a v-bind:href="link">
        <div class="thumbnail" style="height: 250px">
            <center>
                <div class="test" :style="background"></div>
            </center>
            <div class="caption">
                <h3 style="text-align: center">{{title}}</h3>
            </div>
        </div>
    </a>
    </div>

</template>
<script>
export default{
    props:['title','img','link'],
    created(){

    },
    data(){
        return{
            background:{
                //backgroundImage:"url('http://app.dev/images/jpg/100.jpg')"
                backgroundImage:this.img
            }
        }
    },
    methods:{

    }
}
</script>
<style>
.thumbnail{
    height: 350px;
}
    .test{
     height: 170px;
        width: 170px;
    }
div{overflow:hidden}
.test{
    background-size:100%;
    background-position:center center;
    background-repeat:no-repeat;
}
</style>