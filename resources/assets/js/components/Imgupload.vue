<template>
    <div class="center">
        <center>
            <div class="row">   <img width="150" :src="src"/>
            </div>
            <vue-core-image-upload
                    text="修改头像"
                    class="btn btn-primary"
                    :crop="true"
                    @imageuploaded="imageuploaded"
                    :data="csrf"
                    :max-file-size="5242880"
                    url="/user/avatar/upload">
            </vue-core-image-upload>
        </center>
    </div>
</template>

<script>
    import VueCoreImageUpload from 'vue-core-image-upload'

    export default {
        components: {
            'vue-core-image-upload': VueCoreImageUpload,
        },
        props:["avatar"],
        data() {
            return {
                //src : "http://app.dev/default.jpg",
                src:this.avatar,
                csrf:{
                    _token:Laravel.csrfToken
                }
            }
        },
        methods: {
            imageuploaded (res){
                console.log("upload success");
                console.log(res);
                this.src=res;
            }
        },
    };
</script>