<!-- Classic Modal -->
<div data-keyboard="false" data-backdrop="static" class="modal fade" id="FilterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title">Filter Data</h4>
            </div>
            <div class="modal-body">
            
                <form id="formfilteremployee" method="post" action="#">

                    <input type="hidden" name="idtarget" id="idtarget">
                    

                    <div class="form-group label-floating">
                        <x-input-label class="control-label" for="work_unit" :value="__('Unit Kerja')" />
                        <select id="filter_employee_workunit" required name="work_unit" class="form-control" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                            <option >Choose</option>
                            <option value="all">All</option>
                           @foreach ($workunit as $list_workunit)
                            <option value="{{ base64_encode($list_workunit->id) }}">{{ $list_workunit->name }}</option>
                           @endforeach
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Apply</button>
                <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--  End Modal -->