<template>
    <div id="home">
        <HomeHeader />
        <b-container fluid>
            <h1 class="header-text">WHY CHOOSE CSI?</h1>
            <b-row class="logos">
                <b-col md="4">
                    <img src="/storage/HOME PAGE/EASIER.png" alt />
                    <br />
                    <h3 class="logo-text">EASIER</h3>
                    <p>
                        We, at CSI, have been providing
                        <br />easy to understand, easy to use,
                        <br />and easy to
                        execute business solutions,
                        <br />for over 24 years.
                    </p>
                </b-col>
                <b-col md="4">
                    <img src="/storage/HOME PAGE/SIMPLIER.png" alt />
                    <br />
                    <h3 class="logo-text">SIMPLER</h3>
                    <p>
                        We strive to make your daily and
                        <br />future business processes simpler
                        <br />through the latest advancement in technology.
                    </p>
                </b-col>
                <b-col md="4">
                    <img src="/storage/HOME PAGE/FASTER.png" alt />
                    <br />
                    <h3 class="logo-text">FASTER</h3>
                    <p>
                        Here at CSI, we value your time.
                        <br />we provide fast, efficient and on time
                        <br />products and services at your disposal.
                    </p>
                </b-col>
            </b-row>
            <b-row class="mt-4">
                <b-col md="3">
                  <div>
                    <img id="easy-exp" src="/storage/HOME PAGE/easier_exp.png" alt />
                  </div>
                </b-col>
            </b-row>
        </b-container>
        <appFooter />
    </div>
</template>

<script>
import HomeHeader from "../../components/Home/HomeHeader.vue"
import appFooter from "../../components/layouts/appFooter.vue"
export default {
  components: {
    HomeHeader,
    appFooter
  }
};
</script>

<style lang="css" scoped>
.header-text {
  margin-top: 50px;
  color: #fff;
  font-size: 3.5rem;
}
.logos {
  padding-top: 80px;
}
.logo-text {
  color: #fdff0a;
  text-decoration: underline;
}
p {
  color: #fff;
  font-size: 1.2rem;
}
@media only screen and (max-width: 800px) {
  #csi-logo {
    display: none;
  }
}

@media only screen and (max-width: 800px) {
  #easy-exp{
    width:100%;
  }
}
</style>
