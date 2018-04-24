	<section id="blog" class="container">
        <div class="center">
            <br><br><br>
            <h2>Lowongan Pekerjaan</h2>
            <p class="lead"><i>bergabunglah bersama kami!</i></p>
            <br><br><br>
            
            <!-- Trigger/Open The Modal -->
            <button id="myBtn" class="btn btn-primary btn-lg">Start Application</button>

            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">

                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2>Modal Header</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row contact-wrap"> 
                            <div class="status alert alert-success" style="display: none"></div>
                                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemailjob.php">
                                <div class="col-sm-5 col-sm-offset-1">
                                    <div class="form-group">
                                        <label>First Name *</label>
                                        <input type="text" name="name" class="form-control" placeholder="Your First Name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Email *</label>
                                        <input type="email" name="email" class="form-control" placeholder="Your Email" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone *</label>
                                        <input type="number" class="form-control" placeholder="Your Phone Number" required="required">
                                    </div> 
                                    <div class="form-group">
                                        <label>Address *</label>
                                        <input type="text" class="form-control" placeholder="Your address line 1" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your address line 2">
                                    </div>                       
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label>Last Name *</label>
                                        <input type="text" name="name" class="form-control" placeholder="Your Last Name" required="required">
                                    </div>                        
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Application</button>
                                    </div>
                                </div>
                                </form> 
                        </div><!--/.row-->
                    </div>
                    <div class="modal-footer">
                        <h3>PT KARTINI TEH NASIONAL</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#blog-->