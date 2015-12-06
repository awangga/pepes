{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Laporkan pengurusan {{ tag_html_close('h1')}}
{{tag_html_close("div")}}


{{ form("", "class":"form-horizontal","role":"form","method": "post") }}
    <div class="form-group">
	    <label class="control-label col-sm-2" for="email">NIK : </label>
	    <div class="col-sm-10">
			{{ text_field('nik','class':'form-control','placeholder':'Nomor Induk Kependudukan','value':number,'required')}}
	    </div>
	  </div>
	<div class="form-group">
	    <label class="control-label col-sm-2" for="email">Nomor Ponsel : </label>
	    <div class="col-sm-10">
			{{ text_field('num','class':'form-control','placeholder':'081100000','value':number)}}
	    </div>
	  </div>
	<div class="form-group">
	    <label class="control-label col-sm-2" for="email">Dokumen : </label>
	    <div class="col-sm-10">
			{{ text_field('dok','class':'form-control','placeholder':'KTP','value':number)}}
	    </div>
	  </div>
	<div class="form-group">
	    <label class="control-label col-sm-2" for="email">Tingkat : </label>
	    <div class="col-sm-10">
			<select id="tingkat" name="tingkat" class="form-control">
					<option value="RT">RT</option>
					<option value="RW">RW</option>
					<option value="KELURAHAN">KELURAHAN</option>
					<option value="KECAMATAN">KECAMATAN</option>
					<option value="KABKOT">KABKOT</option>
			</select>
		
	    </div>
	</div>
	<div class="form-group">
	    <label class="control-label col-sm-2" for="email">Nama Lokasi : </label>
	    <div class="col-sm-10">
			{{ text_field('namalokasi','class':'form-control','placeholder':'Nomor RT/RW atau Nama Kelurahan/Kecamatan/Kab/Kota','value':number)}}
	    </div>
	  </div>
	<div class="form-group">
	    <label class="control-label col-sm-2" for="email">Lama Proses : </label>
	    <div class="col-sm-10">
			{{ text_field('lama','class':'form-control','placeholder':'angka dalam hari','value':number)}}
	    </div>
	  </div>
	<div class="form-group">
	    <label class="control-label col-sm-2" for="email">Uang Pungutan : </label>
	    <div class="col-sm-10">
			{{ text_field('pungutan','class':'form-control','placeholder':'angka dalam rupiah','value':number)}}
	    </div>
	  </div>
  	<div class="form-group"> 
    	<div class="col-sm-offset-2 col-sm-10">
			{{ submit_button('Send','class':'btn btn-default') }}
    	</div>
  	</div>
    
{{ endForm() }}


<p>
{{ link_to('','Back') }}
</p>