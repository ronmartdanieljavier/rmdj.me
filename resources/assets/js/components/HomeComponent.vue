
<template>
    <div id="aboutHeader" class="flex-center position-ref full-height">
        <div class="" style="text-align: center;padding-left: 5em;">
            <div class="ui text container">
                    <span id="welcome" class="ui header">
                        Hi, I'm Ron Mart Daniel Javier
                    </span>
                <br/>
                <span id="welcomeDesc" class="ui header">
                        a software engineer.
                    </span>
                <br/>
                <br/>
                <button type="button" class="btn btn-primary btn-lg">Learn more</button>
            </div>
        </div>

        <div class="content">
            <img id="aboutImgCloud1" class="" :src="'images/aboutCloud1v2.svg'" />
            <img id="aboutImgCloudMini1" :src="'images/aboutCloudMini1.svg'" />
            <img id="aboutImgCloudMini2" :src="'images/aboutCloudMini2.svg'" />
            <img id="aboutImgCloudMini3" :src="'images/aboutCloudMini3.svg'" />
        </div>
    </div>
    <!-- The content of your page would go here. -->
</template>


<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style lang="scss" scoped>
    @import "../../sass/home.scss";
</style>