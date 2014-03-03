var Lib = {
    hideLoading : function() {
        $('#loading').remove();
        $('#container').show();
    },
    showLoading : function() {
        var loading = document.createElement('div');
        loading.setAttribute('id', 'loading');
        document.body.appendChild(loading);
    }
};
Lib.showLoading();