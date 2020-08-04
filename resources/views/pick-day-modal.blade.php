<div class="modal fade" id="myModalPickDay" role="dialog">
    <div class="modal-dialog modal-dialog modal-lg">
        <div class="modal-content">
            <div
                style="border: 1px solid rgb(221, 221, 221); border-radius: 12px; padding: 24px; box-shadow: rgba(0, 0, 0, 0.12) 0px 6px 16px; position: sticky; top: 150px; height: 500px;">

                <div class="form-group">
                    Check-in: <input type="text" id="startDate1" name="check_in" required/>
                    Checkout: <input type="text" id="endDate1" name="checkout" required/>
                </div>
                <div class="form-group">
                    <button id="btn-chooseDay" class="form-control" data-dismiss="modal"
                            style="background: linear-gradient(to right, rgb(230, 30, 77) 0%, rgb(227, 28, 95) 50%, rgb(215, 4, 102) 100%) !important">
                        Select
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $(document).ready(function () {
        $('#startDate1').datepicker({
            minDate: new Date(),
            format: 'yyyy-mm-dd',
            maxDate: function () {
                return $('#endDate').val()
            }

        }).change(function () {
            $('#endDate1').datepicker({
                minDate: $('#startDate1').val(),
                format: 'yyyy-mm-dd',
            });
        });


        $('#btn-chooseDay').click(function () {
            let startDate = $('#startDate1').val();
            let endDate = $('#endDate1').val();
            console.log(startDate);
            if (startDate === '') {
                startDate = new Date();
            }
            if (endDate === '') {
               // endDate = new Date().setDate(new Date(startDate).getDate() + 1);
                endDate = startDate;
            }
            $('#input-chooseDay').val(new Date(startDate).getDate() + '/'
                + (new Date(startDate).getMonth() + 1) + ' to '
                + new Date(endDate).getDate() + '/' + (new Date(endDate).getMonth() + 1));

            $('#input-start').val(startDate);
            $('#input-end').val(endDate);
        })
    })
</script>
