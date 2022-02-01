<section id="contato__wrapper">
    <div class="container">
        <h3 class="title d-block text-uppercase text-white text-center mb-4">INFORMAÇÕES PARA CONTATO</h3>

        <div class="row">
            <div class="col-md-6">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link bg-light active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="true">Fale conosco</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link bg-light" id="resume-tab" data-toggle="tab" href="#resume" role="tab" aria-controls="resume" aria-selected="false">Trabalhe conosco</a>
                    </li>
                </ul>
                <div class="tab-content bg-white" id="myTabResume">
                    <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <form id="form-contato" class="text-center">
                            @csrf

                            <div class="row">
                                <div class="form-group col-md">
                                    <input type="text" id="name" name="name" placeholder="NOME" class="form-control" required/>
                                </div>
            
                                <div class="form-group col-md">
                                    <input type="text" id="phone" name="phone" placeholder="TELEFONE" class="form-control phone-mask" required/>
                                </div>
                            </div>
        
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="E-MAIL" class="form-control" required/>
                            </div>
        
                            <div class="form-group">
                                <textarea id="message" name="message" rows="2" placeholder="MENSAGEM" class="form-control" required></textarea>
                            </div>
        
                            <div class="mb-3 d-flex justify-content-center">
                                {!! htmlFormSnippet() !!}
                            </div>
        
                            <div class="form-group">
                                <button id="btn-contact-send" type="button" class="btn bg-white ml-0" data-loading-text="<i class='fas fa-spinner fa-spin mr-2'></i>Aguarde...">
                                    <i class="fas fa-paper-plane"></i>
                                    <span class="font-weight-bold">ENVIAR</span>
                                </button>
                            </div>
                        </form>
                        <div class="formResponse"></div>
                    </div>
                    <div class="tab-pane fade" id="resume" role="tabpanel" aria-labelledby="resume-tab">
                        <form id="form-resume" class="text-center" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="form-group col-md">
                                    <input type="text" id="name" name="name" placeholder="NOME" class="form-control" required/>
                                </div>
            
                                <div class="form-group col-md">
                                    <input type="text" id="phone" name="phone" placeholder="TELEFONE" class="form-control phone-mask" required/>
                                </div>
                            </div>
        
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="E-MAIL" class="form-control" required/>
                            </div>
        
                            <div class="form-group">
                                <label for="file-label" class="file float-left text-danger"><small>Selecione um curriculo no formato PDF</small></label>
                                <input type="file" id="file" name="resume" class="form-control" required/>
                            </div>
        
                            <div class="form-group">
                                <textarea id="observations" name="observations" rows="2" placeholder="OBSERVAÇÕES" class="form-control"></textarea>
                            </div>
        
                            <div class="mb-3 d-flex justify-content-center">
                                {!! htmlFormSnippet() !!}
                            </div>
        
                            <div class="form-group">
                                <button id="btn-resume-send" type="button" class="btn bg-white ml-0"
                                        data-loading-text="<i class='fas fa-spinner fa-spin mr-2'></i>Aguarde...">
                                    <i class="fas fa-paper-plane"></i>
                                    <span class="font-weight-bold">ENVIAR</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3703.5920132913566!2d-46.89777348505375!3d-21.83468898556741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c82bfb01fb96ff%3A0x5b7be82496cbad18!2sR.%20Quinzinho%20Ot%C3%A1vio%2C%20317%20-%20Centro%2C%20Vargem%20Grande%20do%20Sul%20-%20SP%2C%2013880-000!5e0!3m2!1spt-BR!2sbr!4v1643666336166!5m2!1spt-BR!2sbr" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>