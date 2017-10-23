<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h1><?= $this->lang->line('contacts_our_location') ?></h1>
                <div class="row">
                    <div class="span8">

                        <figure class="google_map">
                            <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Glasgow,&amp;aq=&amp;sll=46.975033,31.994583&amp;sspn=0.368248,0.617294&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Glasgow,+Glasgow+City,+United+Kingdom&amp;t=m&amp;ll=55.866932,-4.256344&amp;spn=0.020324,0.070896&amp;z=13&amp;output=embed"></iframe>
                        </figure>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">


                <h2><?=$this->lang->line('contacts_form')?></h2>

                <div id="note"></div>
                <div id="fields">
                    <form id="ajax-contact-form" class="form-horizontal contact-form" action="contacts" method="post">
                        <input type="hidden" name="lang" value="<?=$lang ?>">
                        <?php  echo validation_errors(); ?>
                        <div class="row">
                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label" for="inputName"><?=$this->lang->line('contacts_name')?>:</label>
                                    <div class="controls">
                                        <input class="span4" type="text" id="inputName" name="name"
                                               placeholder="<?=$this->lang->line('contacts_name')?>:"
                                               onBlur="if(this.value=='') this.value='Your full name:'"
                                               onFocus="if(this.value =='Your full name:' ) this.value=''">
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail"><?=$this->lang->line('contacts_email')?>:</label>
                                    <div class="controls">
                                        <input class="span4" type="text" id="inputEmail" name="email"
                                               placeholder="<?=$this->lang->line('contacts_email')?>:" onBlur="if(this.value=='') this.value='Your email:'"
                                               onFocus="if(this.value =='Your email:' ) this.value=''">
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label" for="inputPhone"><?=$this->lang->line('contacts_phone_number')?>:</label>
                                    <div class="controls">
                                        <input class="span4" type="text" id="inputPhone" name="phone_number"
                                               placeholder="<?=$this->lang->line('contacts_phone_number')?>:"
                                               onBlur="if(this.value=='') this.value='Phone number:'"
                                               onFocus="if(this.value =='Phone number:' ) this.value=''">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span12">
                                <div class="control-group">
                                    <label class="control-label" for="inputMessage"><?=$this->lang->line('contacts_message')?>:</label>
                                    <div class="controls">
				                        <textarea class="span12" id="inputMessage" name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                        <div class="row">-->
<!--                            <div class="span12">-->
<!--                                <div class="control-group capthca">-->
<!--                                    <label class="control-label" for="inputCapthca">Capthca:</label>-->
<!--                                    <div class="controls">-->
<!--                                        <input class="" type="text" id="inputCapthca" name="capthca" value="Capthca:"-->
<!--                                               onBlur="if(this.value=='') this.value='Capthca:'"-->
<!--                                               onFocus="if(this.value =='Capthca:' ) this.value=''">-->
<!--                                        <img src="https://demo.gridgum.com/templates/bootstrap-templates/22367/captcha/captcha.php">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <button type="submit" class="submit"><?=$this->lang->line('contacts_send')?></button>
                    </form>
                </div>


            </div>
        </div>


    </div>
</div>