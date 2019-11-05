<div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Tabungan {{$siswa->name}}</h4>
            </div>
            <div class="modal-body">
                <form action="/addTabungan/{{$siswa->id}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" class="form-control" name="siswa_id" value="{{$siswa->id}}">
                    <input type="hidden" class="form-control" name="uang_keluar" value="0">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" minlength="5000" name="uang_masuk" value="0">
                            <label class="form-label">Uang Masuk</label>
                        </div>
                        <div class="help-info">Min. Rp: 5000. Numbers only</div>
                    </div>

                    {{--  <div class="form-group form-float">
                        <div class="form-line">
                            <input type="date" class="form-control" name="date" required>
                        </div>
                        <div class="help-info">MM-DD-YY format</div>
                    </div>  --}}
                    <div class="form-group form-float align-center">
                        <button class="btn btn-primary waves-effect m-t-20" type="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>