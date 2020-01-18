function deleteData(action, id)
{
    $("#dataId").attr('value', id);
    $("#deleteForm").attr('action', action);
}

function formSubmit()
{
    $("#deleteForm").submit();
}