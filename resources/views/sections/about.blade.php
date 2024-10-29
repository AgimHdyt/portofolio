<!-- About Section Start -->
<section class="about section" id="about">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>About</h2>
            </div>
        </div>
        <div class="row">
            <div class="about-content padd-15">
                <div class="row">
                    <div class="about-text padd-15">
                        <h3>I'm {{ $contents['name'] }} and <span>{{ $contents['profesion'] }}</span></h3>
                        <p>{{ $contents['hero_text'] }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="personal-info padd-15">
                        <x-edit_section_btn target="#edit-about-modal" />
                        <x-modal id="edit-about-modal" title="Edit Section Hero"
                            form_action="{{ route('contents.update.hero') }}" form_method="put" form_data="true">
                            <div class="form-item col-12 padd-15">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukkan nama anda" value="{{ old('name', $contents['name']) }}"
                                        autofocus required>
                                    @error('name')
                                        <span style="color: red; margin-top: 5px">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-item col-12 padd-15">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('profesion') is-invalid @enderror"
                                        id="profesion" name="profesion" placeholder="Masukkan profesi anda"
                                        value="{{ old('profesion', $contents['profesion']) }}" required>
                                    @error('profesion')
                                        <span style="color: red; margin-top: 5px;">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-item col-12 padd-15">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="wa_link" name="wa_link"
                                        placeholder="Masukkan link WhatsApp anda"
                                        value="{{ old('wa_link', $contents['wa_link']) }}" required>
                                    @error('wa_link')
                                        <span style="color: red; margin-top: 5px;">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-item col-12 padd-15">
                                <div class="form-group">
                                    <textarea class="form-control" id="hero_text" name="hero_text" rows="3" required>{{ old('hero_text') ?? $contents['real_hero_text'] }}</textarea>
                                </div>
                            </div>
                            <div class="form-item col-12 padd-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-item col-6 padd-15">
                                            <label for="hero_image" class="form-label">Hero Image</label>
                                        </div>
                                    </div>
                                    <input class="form-control" type="file" id="hero_image"
                                        value="{{ old('hero_image', $contents['hero_image']) }}" name="hero_image">
                                    @error('hero_image')
                                        <span style="color: red; margin-top: 5px;">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-item col-12 padd-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-item col-6 padd-15">
                                            <label for="self_resume" class="form-label">Resume</label>
                                        </div>
                                    </div>
                                    <input class="form-control" value="{{ old('self_resume') }}" type="file"
                                        id="self_resume" name="self_resume">
                                    @error('self_resume')
                                        <span style="color: red; margin-top: 5px;">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </x-modal>
                        <div class="row">
                            <div class="info-item padd-15">
                                <p>Birthday : <span>1 Feb 2005</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Age : <span>17</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Website : <span>agim-hidayat.epizy.com</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Email : <span>agimhdyt@gmail.com</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Degree : <span>Student</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Phone : <span>0857-1776-6367</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>City : <span>Karawang</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Freelance : <span>Available</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="buttons padd-15">
                                <a href="#contact" data-section-index="1" class="btn hire-me">Hire Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="skills padd-15">
                        <div class="row">
                            <div class="skill-item padd-15">
                                <h5>HTML</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 76%;"></div>
                                    <div class="skill-percent">76%</div>
                                </div>
                            </div>
                            <div class="skill-item padd-15">
                                <h5>CSS</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 80%;"></div>
                                    <div class="skill-percent">80%</div>
                                </div>
                            </div>
                            <div class="skill-item padd-15">
                                <h5>Javascript</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 60%;"></div>
                                    <div class="skill-percent">60%</div>
                                </div>
                            </div>
                            <div class="skill-item padd-15">
                                <h5>PHP</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 70%;"></div>
                                    <div class="skill-percent">70%</div>
                                </div>
                            </div>
                            <div class="skill-item padd-15">
                                <h5>Laravel</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 75%;"></div>
                                    <div class="skill-percent">75%</div>
                                </div>
                            </div>
                            <div class="skill-item padd-15">
                                <h5>Codeigniter 4</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 80%;"></div>
                                    <div class="skill-percent">80%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="education padd-15">
                        <h3 class="title">Education</h3>
                        <div class="row">
                            <div class="timeline-box padd-15">
                                <div class="timeline shadow-dark">
                                    <!-- timeline item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-date">
                                            <i class="fa fa-calendar"></i> 2020 - Now
                                        </h3>
                                        <h4 class="timeline-title">DARUSSA'ADAH Vocational High School</h4>
                                        <p class="timeline-text">
                                            Currently studying at the Darussa'adah Vocational High School
                                            from 2020 until now
                                        </p>
                                    </div>
                                    <!-- timeline item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-date">
                                            <i class="fa fa-calendar"></i> 2017 - 2020
                                        </h3>
                                        <h4 class="timeline-title">AL-IFADAH Islamic Junior High School
                                        </h4>
                                        <p class="timeline-text">
                                            Ever studied at al ifadah Islamic junior high school to get
                                            religious and general knowledge
                                        </p>
                                    </div>
                                    <!-- timeline item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-date">
                                            <i class="fa fa-calendar"></i> 2011 - 2017
                                        </h3>
                                        <h4 class="timeline-title">CIKALONG III Elementary School</h4>
                                        <p class="timeline-text">
                                            Studied at elementary school from 2011 to 2017 in Cikalong
                                            Village, Cilamaya Wetan District,
                                            Karawang Regency
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="experience padd-15">
                        <h3 class=" title">Experience</h3>
                        <div class="row">
                            <div class="timeline-box padd-15">
                                <div class="timeline shadow-dark">
                                    <!-- timeline item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-date">
                                            <i class="fa fa-calendar"></i> May 2022 - June 2022
                                        </h3>
                                        <h4 class="timeline-title">INTERNSHIP at PT. Max Samsta Grup</h4>
                                        <p class="timeline-text">
                                            Intern at pt max samasta to seek experience and insight in the
                                            industrial world
                                        </p>
                                    </div>
                                    <!-- timeline item -->
                                    <!-- <div class="timeline-item">
              <div class="circle-dot"></div>
              <h3 class="timeline-date">
                <i class="fa fa-calendar"></i> 2012 - 2015
              </h3>
              <h4 class="timeline-title">Master in Computer Science</h4>
              <p class="timeline-text">

              </p>
            </div> -->
                                    <!-- timeline item -->
                                    <!-- <div class="timeline-item">
              <div class="circle-dot"></div>
              <h3 class="timeline-date">
                <i class="fa fa-calendar"></i> 2012 - 2015
              </h3>
              <h4 class="timeline-title">Master in Computer Science</h4>
              <p class="timeline-text">

              </p>
            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->
