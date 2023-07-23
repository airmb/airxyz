document.oncontextmenu = new Function("return false;");
document.onkeydown = document.onkeyup = document.onkeypress = function(event) { var e = event || window.event || arguments.callee.caller.arguments[0]; if (e && e.keyCode == 123) { e.returnValue = false; return false; } }
layui.use(['jquery', 'layer'], function () {
  const $ = layui.$;
  const layer = layui.layer;
  const appidShare = {
    data: {
      appleidEmail: 'abc@gmail.com',
      passwd: 'Abc123123',
      status: '状态正常',
      lastUpdate: '2022-12-12 12:12:12'
    },
    canClick: false,
    init () {
      var key = this.getUrlParam('id');
      this.getData(key);
      this.bindClick();
    },
    getData (key) {
      var that = this;
      var formData = new FormData()
      formData.append('token', key)
      var baseUrl = window.location.origin;
      $.ajax({
        type: 'POST',
        url: baseUrl + '/api/apidToken.php',
        data: formData,
        contentType: false,
        processData: false,
        success: res => {
          var data = JSON.parse(res)
          if (data.errNum === '1') {
            that.data = data.retData;
            $('.id-box .email').text(that.data.appleidEmail);
            $('.id-box .msg').text(that.data.status);
            $('.id-box .time').text(that.data.lastUpdate);
            that.canClick = true;
            if (that.data.status !== '正常') {
              $('.appleid-main .id-box').addClass('warning');
            } else {
              $('.appleid-main .id-box').removeClass('warning');
            }
          } else {
            layer.msg(data.retMsg)
          }
        },
        error: err => {
          layer.msg('网络错误，请稍后再试');
        }
      })
    },
    getUrlParam (key) {
      var url = window.location.href;
      var stIndex = url.indexOf('?');
      var str = url.substr(stIndex + 1);
      var arr = str.split('&');
      var param = {}
      arr.forEach(item => {
        const val = item.split('=');
        param[val[0]] = val[1]
      })
      return param[key]
    },
    bindClick () {
      const that = this;
      $('#copyEmail').on('click', function (e) {
        if (that.canClick) {
          var input = document.createElement('input')
          document.body.appendChild(input)
          input.setAttribute('value', that.data.appleidEmail)
          input.select()
          document.execCommand('Copy')
          input.remove()
          layer.msg('复制成功');
        }
      })
      $('#copyPwd').on('click', function (e) {
        if (that.canClick) {
          var input = document.createElement('input')
          document.body.appendChild(input)
          input.setAttribute('value', that.data.passwd)
          input.select()
          document.execCommand('Copy')
          input.remove()
          layer.msg('复制成功');
        }
      })
    }
  };
  appidShare.init();
});