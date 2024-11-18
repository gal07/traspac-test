<!-- Classic Modal -->
<div data-keyboard="false" data-backdrop="static" class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title">Edit Employee</h4>
            </div>
            <div class="modal-body">
            
                <input type="hidden" name="formeditemployeeurl" value="{{ route('employee.update') }}">
                <form id="formeditemployee" method="post" action="#">

                    <input type="hidden" name="idtarget" id="idtarget">
                    
                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="name" :value="__('Nama')" />
                        <x-text-input id="edit_name" name="name" type="text" class="form-control" required autofocus />
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="nip" :value="__('Nip')" />
                        <x-text-input readonly minlength="11" maxlength="11" id="edit_nip" name="nip" type="text" pattern="\d*" class="form-control" required />
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="phone_number" :value="__('No. Telepon')" />
                        <x-text-input id="edit_phone_number" name="phone_number" type="number" class="form-control" required  />
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="tax_number" :value="__('NPWP')" />
                        <x-text-input id="edit_tax_number" name="tax_number" type="number" class="form-control" required />
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="born_date" :value="__('Tgl Lahir')" />
                        <x-text-input id="edit_born_date" name="born_date" type="text" class="form-control datepicker" required />
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="born_date" :value="__('Tempat Lahir')" />
                        <x-text-input id="edit_born_place" name="born_place" type="text" class="form-control" required  />
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="address" :value="__('Alamat')" />
                        <x-text-input id="edit_address" name="address" type="text" class="form-control" required />
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="Gender" :value="__('Kelamin')" />
                        <div class="radio">
                            <label>
                                <input id="gender1" type="radio" name="gender" value="Pria" checked="true"><span class="circle"></span><span class="check"></span> Pria
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input id="gender2" type="radio" name="gender" value="Wanita"><span class="circle"></span><span class="check"></span> Wanita
                            </label>
                        </div>
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="religion" :value="__('Agama')" />
                        <select id="edit_religion" required name="religion" class="form-control" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                            <option >Choose</option>
                            <option value="Islam">Islam</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="group" :value="__('Eselon')" />
                        <select id="edit_group" required name="group" class="form-control" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                            <option >Choose</option>
                           @foreach ($group as $list_group)
                            <option value="{{$list_group->id}}">{{ $list_group->name }}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="formation" :value="__('Golongan')" />
                        <select id="edit_formation" required name="formation" class="form-control" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                            <option >Choose</option>
                           @foreach ($formation as $list_formation)
                            <option value="{{$list_formation->id}}">{{ $list_formation->name }}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="position" :value="__('Posisi')" />
                        <select id="edit_position" required name="position" class="form-control" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                            <option >Choose</option>
                           @foreach ($position as $list_position)
                            <option value="{{$list_position->id}}">{{ $list_position->name }}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="work_unit" :value="__('Unit Kerja')" />
                        <select id="edit_work_unit" required name="work_unit" class="form-control" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                            <option >Choose</option>
                           @foreach ($workunit as $list_workunit)
                            <option value="{{$list_workunit->id}}">{{ $list_workunit->name }}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="placed_job" :value="__('Tempat Tugas')" />
                        <select id="edit_placed_job" required name="placed_job" class="form-control" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                            <option >Choose</option>
                           @foreach ($placedjob as $list_placedjob)
                            <option value="{{$list_placedjob->id}}">{{ $list_placedjob->name }}</option>
                           @endforeach
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--  End Modal -->