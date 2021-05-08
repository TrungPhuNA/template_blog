var Article = {
    init : function (){
        this.loadDocument()
    },

    loadDocument()
    {
        $('.js-select2-document').select2({
            placeholder: 'Chọn tài liệu',
            ajax: {
                url: URL_SEARCH_DOCUMENT,
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results:  $.map(data, function (item) {
                            return {
                                text: item.pro_name,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });
    }
}

export default Article