
<template>

    <div>
        <div class="flex-center position-ref full-height">
            <div id="aboutHeader"></div>
            <div class="" style="text-align: center;">
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
                <img id="aboutImgCloud1" class="" :src="'images/aboutCloud1v2.svg'"/>
                <img id="aboutImgCloudMini1" :src="'images/aboutCloudMini1.svg'" />
                <img id="aboutImgCloudMini2" :src="'images/aboutCloudMini2.svg'" />
                <img id="aboutImgCloudMini3" :src="'images/aboutCloudMini3.svg'" />
            </div>
        </div>

        <div style="background-color: #f9f5ec;padding-top: 10em;padding-bottom:10em;" >
            <div class="container">
                <div class="row">
                    <div class="col-sm" data-aos="fade-up">
                        <img :src="'images/passion.svg'" />
                    </div>
                    <div class="col-sm" data-aos="fade-left">
                        <div class="align-self-center">
                            <div class="jumbotron jumbotron-fluid" style="background-color: #f9f5ec;">
                                <div class="container">
                                    <!--<h1 class="display-4">Fluid jumbotron</h1>-->
                                    <p class="h3">
                                        I have a passion and a genuine interest in software technology.
                                        <br/>
                                        <br/>
                                        I never stop learning; I keen to learn more about new technologies
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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