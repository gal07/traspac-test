<!-- Classic Modal -->
<div data-keyboard="false" data-backdrop="static" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title">Create New Employee</h4>
            </div>
            <div class="modal-body">
            
                <input type="hidden" name="formcreateemployeeurl" value="{{ route('employee') }}">
                <form id="formcreateemployee" method="post" action="#">
                    
                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="name" :value="__('Nama')" />
                        <x-text-input id="name" name="name" type="text" class="form-control" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="nip" :value="__('Nip')" />
                        <x-text-input minlength="11" maxlength="11" id="nip" name="nip" type="text" pattern="\d*" class="form-control" required />
                        <x-input-error class="mt-2" :messages="$errors->get('nip')" />
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="phone_number" :value="__('No. Telepon')" />
                        <x-text-input id="phone_number" name="phone_number" type="number" class="form-control" required  />
                        <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="tax_number" :value="__('NPWP')" />
                        <x-text-input id="tax_number" name="tax_number" type="number" class="form-control" required />
                        <x-input-error class="mt-2" :messages="$errors->get('tax_number')" />
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="born_date" :value="__('Tgl Lahir')" />
                        <x-text-input id="born_date" name="born_date" type="text" class="form-control datepicker" value="10/10/1998" required />
                        <x-input-error class="mt-2" :messages="$errors->get('born_date')" />
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="born_date" :value="__('Tempat Lahir')" />
                        <x-text-input id="born_place" name="born_place" type="text" class="form-control" required  />
                        <x-input-error class="mt-2" :messages="$errors->get('born_place')" />
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="address" :value="__('Alamat')" />
                        <x-text-input id="address" name="address" type="text" class="form-control" required />
                        <x-input-error class="mt-2" :messages="$errors->get('address')" />
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="Gender" :value="__('Kelamin')" />
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="Pria" checked="true"><span class="circle"></span><span class="check"></span> Pria
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="Wanita"><span class="circle"></span><span class="check"></span> Wanita
                            </label>
                        </div>
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="religion" :value="__('Agama')" />
                        <select required name="religion" class="form-control" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
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
                        <select required name="group" class="form-control" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                            <option >Choose</option>
                           @foreach ($group as $list_group)
                            <option value="{{$list_group->id}}">{{ $list_group->name }}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="formation" :value="__('Golongan')" />
                        <select required name="formation" class="form-control" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                            <option >Choose</option>
                           @foreach ($formation as $list_formation)
                            <option value="{{$list_formation->id}}">{{ $list_formation->name }}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="position" :value="__('Posisi')" />
                        <select required name="position" class="form-control" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                            <option >Choose</option>
                           @foreach ($position as $list_position)
                            <option value="{{$list_position->id}}">{{ $list_position->name }}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="work_unit" :value="__('Unit Kerja')" />
                        <select required name="work_unit" class="form-control" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                            <option >Choose</option>
                           @foreach ($workunit as $list_workunit)
                            <option value="{{$list_workunit->id}}">{{ $list_workunit->name }}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="placed_job" :value="__('Tempat Tugas')" />
                        <select required name="placed_job" class="form-control" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                            <option >Choose</option>
                           @foreach ($placedjob as $list_placedjob)
                            <option value="{{$list_placedjob->id}}">{{ $list_placedjob->name }}</option>
                           @endforeach
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Create</button>
                <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--  End Modal -->