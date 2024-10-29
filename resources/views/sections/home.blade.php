 <!-- Home Section Start -->
 <section class="home active section" id="home">
     @auth

         <x-edit_section_btn target="#edit-hero-modal" />
         <x-modal id="edit-hero-modal" title="Edit Section Hero" form_action="{{ route('contents.update.hero') }}"
             form_method="put" form_data="true">
             <div class="form-item col-12 padd-15">
                 <div class="form-group">
                     <input type="text" class="form-control" id="name" name="name"
                         placeholder="Masukkan nama anda" value="{{ old('name', $contents['name']) }}" autofocus required>
                     @error('name')
                         <span style="color: red; margin-top: 5px">
                             {{ $message }}
                         </span>
                     @enderror
                 </div>
             </div>

             <div class="form-item col-12 padd-15">
                 <div class="form-group">
                     <input type="text" class="form-control @error('profesion') is-invalid @enderror" id="profesion"
                         name="profesion" placeholder="Masukkan profesi anda"
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
                         placeholder="Masukkan link WhatsApp anda" value="{{ old('wa_link', $contents['wa_link']) }}"
                         required>
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
                     <input class="form-control" value="{{ old('self_resume') }}" type="file" id="self_resume"
                         name="self_resume">
                     @error('self_resume')
                         <span style="color: red; margin-top: 5px;">
                             {{ $message }}
                         </span>
                     @enderror
                 </div>
             </div>

         </x-modal>
     @endauth

     <div class="container">
         <div class="row">
             <div class="home-info padd-15">
                 <h3 class="hello">Hello, my name is <span class="name">{{ $contents['name'] }}</span>
                 </h3>
                 {{-- <h3 class="hello">Hello, my name is <span class="name">Agim Hidayat</span></h3> --}}
                 <h3 class="my-profession">I' m a <span class="typing">{{ $contents['profesion'] }}</span></h3>
                 <p>{{ $contents['hero_text'] }}</p>
                 <a href="{{ $contents['wa_link'] }}" class="btn btn-outline"
                     style="background-color: transparent; color: var(--skin-color); border: 1px solid var(--skin-color);"><i
                         class="fab fa-whatsapp"></i>
                     Whatsapp</a>
                 <a href="{{ $contents['self_resume'] }}" download="Agim's CV" class="btn">Download CV</a>
             </div>
             <div class="home-img padd-15">
                 <img src="{{ $contents['hero_image'] }}" alt="">
             </div>
         </div>
     </div>
 </section>
 <!-- Home Section End -->
