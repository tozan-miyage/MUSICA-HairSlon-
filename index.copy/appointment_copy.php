                    <div class="row appointment_area">
                        <div class="col appointment_left">
                            <div class="input_caption">
                                <p>Name</p>
                                [mwform_text name="name" id="name" size="60" conv_half_alphanumeric="true"]
                            </div>
                            <div class="input_caption">
                                <p>Email</p>
                                [mwform_email name="email" id="email" size="60"]
                            </div>
                            <div class="input_caption">
                                <p>Phone number</p>
                                [mwform_tel name="tel"]
                            </div>
                            <div class="input_caption">
                                <p>Date</p>
                                [mwform_datepicker name="date" id="date" size="30"]
                            </div class="input_caption">
                            <div class="input_caption">
                                <p>Time</p>
                                [mwform_text name="time" id="time" size="60" placeholder="例　16:00" conv_half_alphanumeric="true"]
                            </div>
                            <div class="input_caption">
                                <p>Description</p>
                                [mwform_textarea name="description" id="description" cols="50" rows="5" placeholder=""]

                            </div>
                            <div class="input_caption">
                                <!-- <p>submit</p> -->
                                [mwform_submitButton name="mwform_submitButton-349" class="form_submit" confirm_value="check" submit_value="submit"]
                            </div>
                        </div>
                    </div>

                    <form action="" method="post">
                        <div class="row appointment_area">
                            <div class="col appointment_left">
                                <div class="input_caption">
                                    <p>Name</p>
                                    <input type="text" id="name" name="name">
                                </div>
                                <div class="input_caption">
                                    <p>Email</p>
                                    <input type="email" id="email" name="email">
                                </div>
                                <div class="input_caption">
                                    <p>Phone number</p>
                                    <input type="tel" id="tel" name="tel">
                                </div>
                                <div class="input_caption">
                                    <p>Date</p>
                                    <input type="date" id="date" name="date">
                                </div class="input_caption">
                                <div class="input_caption">
                                    <p>Time</p>
                                    <input type="time" id="time" name="time">
                                </div>
                                <div class="input_caption">
                                    <p>Description</p>
                                    <textarea id="description" name="description"></textarea>

                                </div>
                                <div class="input_caption">
                                    <!-- <p>submit</p> -->
                                    <input type="submit" value="submit" class="form_submit">
                                </div>
                            </div>
                        </div>
                    </form>