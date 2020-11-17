<div class="tab-pane fade show" id="keluarga" role="tabpanel" aria-labelledby="keluarga-tab">

    <div class="row">

        <div class="col-12 col-sm-6 col-lg-6">
            <div class="form-group">
                <label>Status orang tua</label>
                <select class="form-control" id="txtStatusOrangTua">
                    @php $no = 1; @endphp
                    @foreach($statusOrangTua as $stOrangTua)
                        <option value="{{ $no }}">{{ $stOrangTua }}</option>
                    @php $no++; @endphp
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-6">

        </div>

    </div>

</div>