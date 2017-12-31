<template>
    <section>
        <div class="container-fluid">
            <h2 class="title has-text-centered">Przykładowe realizacje</h2>

             <div class="columns">
                <div class="column">
                    <div class="card portfolio-item-home">
                    <div class="card-image">
                        <figure class="image is-16by9">
                        <img src="img/portfolios/port-1.jpg" alt="" @click="isCardModalActive = true">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                        <h4 class="modal-card-title" @click="isCardModalActive = true">
                            Nazwa
                        </h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus nec iaculis mauris.
                  </div>      
                  </div>  
                </div>
                </div><!--end of column-->
                <div class="column">
                    <div class="card portfolio-item-home">
                    <div class="card-image">
                        <figure class="image is-16by9">
                        <img src="img/portfolios/port-1.jpg" alt="" @click="isCardModalActive = true">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                        <h4 class="modal-card-title" @click="isCardModalActive = true">
                            Nazwa
                        </h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus nec iaculis mauris.
                  </div>      
                  </div>  
                </div>
                </div><!--end of column-->
                <div class="column">
                    <div class="card portfolio-item-home">
                    <div class="card-image">
                        <figure class="image is-16by9">
                        <img src="img/portfolios/port-1.jpg" alt="" @click="isCardModalActive = true">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                        <h4 class="modal-card-title" @click="isCardModalActive = true">
                            Nazwa
                        </h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus nec iaculis mauris.
                  </div>      
                  </div>  
                </div>
                </div><!--end of column-->
                <div class="column">
                    <div class="card portfolio-item-home">
                    <div class="card-image">
                        <figure class="image is-16by9">
                        <img src="img/portfolios/port-1.jpg" alt="" @click="isCardModalActive = true">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                        <h4 class="modal-card-title" @click="isCardModalActive = true">
                            Nazwa
                        </h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus nec iaculis mauris.
                  </div>      
                  </div>  
                </div>
                </div><!--end of column-->
                <div class="column">
                    <div class="card portfolio-item-home">
                    <div class="card-image">
                        <figure class="image is-4by8">
                        <img src="img/portfolios/port-1.jpg" alt="" @click="isCardModalActive = true">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                        <h4 class="modal-card-title" @click="isCardModalActive = true">
                            Nazwa
                        </h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus nec iaculis mauris.
                  </div>      
                  </div>  
                </div>
                </div><!--end of column-->
                
            </div>                
        </div>
        

        <b-modal :active.sync="isCardModalActive">
            <div class="card modal-portolio-home">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="img/portfolios/port-1.jpg" alt="Image">
                    </figure>
                </div>
                <div class="card-content">                    
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                        <a>#css</a> <a>#responsive</a>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                        <a>#css</a> <a>#responsive</a>
                        <br>
                        <small>11:09 PM - 1 Jan 2016</small>
                    </div>
                </div>
            </div>
        </b-modal>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                isCardModalActive: false
            }
        }
    }
</script>