<div class="o-row o-row--width-normal s-color-scheme">
    <div class="o-container o-container--width-normal o-container--width-same">
        <div class="o-sm-col-12">
            <div class="c-empty-space c-empty-space--md"></div>
        </div>
    </div>
</div>




<div class="o-row new-homepage-contact-us o-row--width-normal s-color-scheme">
    <div class="o-container o-container--width-normal o-container--width-same">
        <div class="o-sm-col-12">
            <div class="o-row o-container">
                <div
                    class="o-sm-col-12 o-lg-col-offset-0 o-lg-col-5 o-md-col-offset-0 o-md-col-5 o-sm-col-offset-0 o-hidden-sm o-xs-col-12 o-hidden-xs">
                    <div class="c-headings-block gradient_color gradient_color u-font-size-extra-large">
                        <div class=" u-font-size-extra-large c-headings-block__sub">
                            </p>
                            <h3>Let’s Work<br />
                                Together</h3>
                            <p>
                        </div>
                    </div>
                    <div class="c-empty-space c-empty-space--xs"></div>
                    <div class="wpb_single_image wpb_content_element vc_align_">
                        <figure class="wpb_wrapper vc_figure">
                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy"
                                    decoding="async" width="660" height="789"
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                    class="lazy " loading="lazy"
                                    data-src="wp-content/uploads/2023/11/homepage-lets-work-together.png"
                                    class="lazy vc_single_image-img attachment-full" alt
                                    title="homepage-lets-work-together"
                                    data-srcset="wp-content/uploads/2023/11/homepage-lets-work-together.png 660w, wp-content/uploads/2023/11/homepage-lets-work-together-251x300.png 251w"
                                    sizes="(max-width: 660px) 100vw, 660px" /><noscript><img loading="lazy"
                                        decoding="async" width="660" height="789"
                                        src="wp-content/uploads/2023/11/homepage-lets-work-together.png"
                                        class="vc_single_image-img attachment-full" alt=""
                                        title="homepage-lets-work-together"
                                        srcset="wp-content/uploads/2023/11/homepage-lets-work-together.png 660w, wp-content/uploads/2023/11/homepage-lets-work-together-251x300.png 251w"
                                        sizes="(max-width: 660px) 100vw, 660px" /></noscript>
                            </div>
                        </figure>
                    </div>
                </div>
                <div
                    class="o-sm-col-12 o-lg-col-offset-1 o-lg-col-6 o-md-col-offset-1 o-md-col-6 o-sm-col-offset-0 o-hidden-sm o-xs-col-12 o-hidden-xs">
                    <div>
                        <div id="hubspot-form-35af469e-31f9-44cb-8d2c-24ffa4a83132-2726"
                            class="c-hs-form-wrap js-hs-form-wrap">


                        </div>
                    </div>
                    <div class="c-empty-space c-empty-space--lg"></div>
                </div>
            </div>
            <div class="o-row o-container">
                <div
                    class="o-sm-col-12 o-lg-col-offset-0 o-lg-col-4 o-hidden-lg o-md-col-offset-0 o-md-col-4 o-hidden-md o-sm-col-offset-0 o-xs-col-12">
                    <div class="c-headings-block u-font-size-extra-large">
                        <h2 class="gradient_color  c-headings-block__main h3">
                            Let’s Work Together </h2>
                    </div>
                </div>
                <div
                    class="o-sm-col-12 o-lg-col-offset-1 o-lg-col-6 o-hidden-lg o-md-col-offset-1 o-md-col-6 o-hidden-md o-sm-col-offset-0 o-xs-col-12">
                    <div>
                        <div id="hubspot-form-35af469e-31f9-44cb-8d2c-24ffa4a83132-87753"
                            class="c-hs-form-wrap js-hs-form-wrap">

                            {{-- bootstrap form to accept mentors data and insert into database  --}}

                            <form method="POST" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group
                                    {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name') }}">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                                <div class="form-group
                                    {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control"
                                        value="{{ old('email') }}">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                                <div class="form-group
                                    {{ $errors->has('phone') ? 'has-error' : '' }}">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control"
                                        value="{{ old('phone') }}">
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                </div>
                                <div class="form-group
                                    {{ $errors->has('college') ? 'has-error' : '' }}">
                                    <label for="college">College</label>
                                    <input type="text" name="college" class="form-control"
                                        value="{{ old('college') }}">
                                    <span class="text-danger">{{ $errors->first('college') }}</span>
                                </div>

                                <br>

                                <div class="upload-container">
                                    <div id="uploadArea" class="upload-area">
                                        <input type="file" id="fileInput" class="upload-input" multiple style="display: none;" />
                                        <button type="button" class="upload-button" id="browseButton">Upload College ID / Document</button>
                                    </div>
                                    <div class="preview-container" id="previewContainer"></div>
                                </div>

                                {{-- year with dropdown option 2022,2023,2024,2025 --}}


                                <div class="form-group
                                    {{ $errors->has('year') ? 'has-error' : '' }}">
                                    <label for="year">Year</label>
                                   
                                    <select id="select2" name="year" id="year">
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                    </select>

                                </div>

                                
                                <div class="form-group
                                    {{ $errors->has('score') ? 'has-error' : '' }}">
                                    <label for="score">Score</label>
                                    <input type="text" name="score" class="form-control"
                                        value="{{ old('score') }}">
                                    <span class="text-danger">{{ $errors->first('score') }}</span>
                                </div>
                                <br>
                                
                               {{-- upload score card  --}}

                               <div class="upload-container">
                                <div id="uploadArea2" class="upload-area">
                                    <input type="file" id="fileInput2" class="upload-input" style="display: none;" />
                                    <button type="button" class="upload-button" id="browseButton2">Upload Score Card</button>
                                </div>
                                <div class="preview-container" id="previewContainer2"></div>
                            </div>
                                
                                
                                <div class="form-group
                                    {{ $errors->has('message') ? 'has-error' : '' }}">
                                    <label for="message">Message</label>
                                    <textarea name="message" class="form-control">{{ old('message') }}</textarea>
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                </div>
                                <div class="form-group
                                    {{ $errors->has('consent') ? 'has-error' : '' }}">
                                    <label for="consent">Consent</label>
                                    <input type="checkbox" name="consent" class="form-control"
                                        value="{{ old('consent') }}">
                                    <span class="text-danger">{{ $errors->first('consent') }}</span>
                                </div>


                           


                        </div>
                    </div>
                    <div class="c-empty-space c-empty-space--lg"></div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- select2 js  --}}





