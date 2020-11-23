<x-layout>

    <x-miniheader />    

    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-12 col-md-6 p-md-5">
                <div class="my-3">
                    <h3 class="mb-3">Dove siamo</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3005.802701291777!2d16.876017250675904!3d41.116999820575195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1347e8436a184d51%3A0x46b0cca3a4825b96!2sVia%20Giovanni%20Amendola%2C%2017%2C%2070126%20Bari%20BA!5e0!3m2!1sen!2sit!4v1606134518526!5m2!1sen!2sit" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="img-fluid"></iframe>
                </div> 
                <div class="my-3">
                    <h3 class="mb-3">Orari di visita</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col">Lunedì</th>
                                <th scope="col">Martedì</th>
                                <th scope="col">Mercoledì</th>
                                <th scope="col">Giovedì</th>
                                <th scope="col">Venerdì</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Dott. Sapienza</th>
                                <td>09:00-18:00h</td>
                                <td>09:00-18:00h</td>
                                <td></td>
                                <td>09:00-18:00h</td>
                                <td>09:00-18:00h</td>
                              </tr>
                              <tr>
                                <th scope="row">Dott. Maggialetti</th>
                                <td></td>
                                <td>09:00-18:00h</td>
                                <td>09:00-18:00h</td>
                                <td>09:00-18:00h</td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">Dott. Paolillo</th>
                                <td>09:00-18:00h</td>
                                <td></td>
                                <td>09:00-18:00h</td>
                                <td></td>
                                <td>09:00-18:00h</td>
                              </tr>
                              <tr>
                                <th scope="row">Dr.ssa Grimaldi</th>
                                <td>09:00-13:00h</td>
                                <td>09:00-13:00h</td>
                                <td>09:00-13:00h</td>
                                <td>09:00-13:00h</td>
                                <td>09:00-13:00h</td>
                              </tr> 
                            </tbody>
                        </table>    
                    </div>
                </div>   
            </div>
            <div class="col-12 col-md-6 p-md-5">
                <h3 class="login-heading mb-4">Prenota la tua visita</h3>
                <form>
                <div class="form-label-roup mb-3">
                    <label for="dentista">Scegli specialista</label>
                    <select class="form-control" id="dentist">
                        <option></option>
                        <option>Dott. Simone Sapienza</option>
                        <option>Dott. Angelo Maggialetti</option>
                        <option>Dott. Giovanni Paolillo</option>
                        <option>Dr.ssa Beatrice Grimaldi</option>
                    </select>
                </div>
                <div class="form-label-group mb-3">
                    <label for="data">Scegli data</label>
                    <input type="date" class="form-control" id="date">
                </div>
                <div class="form-label-group mb-3">
                    <label for="nome">Nome e cognome</label>
                    <input type="text" id="date" class="form-control" placeholder="Nome e cognome" required autofocus>
                </div>
                <div class="form-label-group mb-3">
                    <label for="inputEmail">Indirizzo email</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Indirizzo email" required autofocus>
                </div>

                <div class="form-label-group mb-3">
                    <label for="messaggio">Inserisci il tuo messaggio</label>
                    <textarea class="form-control" id="messagge" rows="3"></textarea>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Accetto il trattamento dei dati secondo il regolamento GDPR</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-5" type="submit">prenota visita</button>
                <div class="text-center">
                </form>        
            </div>
        </div>
    </div>

</x-layout>