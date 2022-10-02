/*!
 * jQuery messenger plugin
 * https://github.com/myspace-nu
 *
 * Copyright 2021 Johan Johansson
 * Released under the MIT license
 */
(function ($) {
  var instances = [];
  $.fn.fancyMessenger = function (options) {
    instances.push(this);
    var settings = $.extend(
      true,
      {
        text: {
          heading: "Send us a message!",
          body: '<form><input class="form-control form-control-sm" type="email" placeholder="Your e-mail address" /><textarea class="form-control form-control-sm" placeholder="Your message"></textarea><button class="btn btn-light btn-sm">Send</button></form>',
          sent: "Message sent!",
          invalidEmail: "Invalid e-mail!",
          sendError: "Error sending message!",
        },
        available: {
          timezone: "Europe/Stockholm",
          fromHour: 0,
          untilHour: 0,
        },
        closeOnSend: true,
        onSend: function () {
          return true;
        },
      },
      options
    );
    var getTimezoneOffset = function (d, tz) {
      const a = d.toLocaleString("ja", { timeZone: tz }).split(/[/\s:]/);
      a[1]--;
      const t1 = Date.UTC.apply(null, a);
      const t2 = new Date(d).setMilliseconds(0);
      return (t2 - t1) / 60 / 1000;
    };

    var fancyParent = this.length ? this : $("body").first();
    var fancyMarkup = $(
      '<a href="tel:+918989282811"><div class="fancyMessenger"><div class="fancyMessenger-header"><div class="fancyMessenger-avatar"><div class="fancyMessenger-available">&check;</div></div><div class="fancyMessenger-text">' +
        settings.text.heading +
        '</div></div><div class="fancyMessenger-body">' +
        settings.text.body +
        '</div><div class="fancyMessenger-info"></div></div></a>'
    );
    var fancyStyleSheet = $(`<style type="text/css">
.fancyMessenger{background-color:#2368af;border-radius:28px;max-width:250px;min-width:56px;display:inline-block;box-shadow:0 0 20px rgba(60,60,60,.2)}.fancyMessenger *{font-family:"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"}.fancyMessenger-header{position:relative;height:56px;cursor:pointer}.fancyMessenger-body,.fancyMessenger-info{display:none;color:#fff;margin:5px 5px 15px 5px;font-family:Roboto,sans-serif;font-size:12px}.fancyMessenger-body *{margin-bottom:5px}.fancyMessenger-avatar{background-position:center;background-size:80%;background-repeat:no-repeat;top:5px;left:5px;width:46px;height:46px;border-radius:23px;position:absolute}.fancyMessenger-available{position:absolute;text-align:center;width:18px;height:18px;background-color:#40b681;color:#fff;font-size:12px;font-weight:700;top:0;left:35px;border-radius:100%}.fancyMessenger-text{padding:20px 40px 0 60px;color:#fff;font-family:Roboto,sans-serif;font-size:13px;display:none}.fancyMessenger-info{display:none}.fancyMessenger input,textarea{box-sizing:border-box;display:block;width:100%;color:#495057;border:1px solid #ced4da;padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem}.fancyMessenger textarea{overflow:auto;resize:vertical}.fancyMessenger button:focus,input:focus,textarea:focus{outline:0}.fancyMessenger button,input[type=button]{padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem;color:#212529;background-color:#f8f9fa;border-color:#f8f9fa;display:inline-block;font-weight:400;text-align:center;vertical-align:middle;border:1px solid transparent;cursor:pointer}.fancyMessenger button:active,input[type=button]:active{box-shadow:0 0 0 .25rem rgba(49,132,253,.5)}
</style>`);
    if (!this.length) {
      $(fancyMarkup).css({
        position: "fixed",
        bottom: "20px",
        right: "20px",
        zIndex: "1000",
      });
    }
    if (
      new Date().getUTCHours() <
        settings.available.fromHour +
          getTimezoneOffset(new Date(), settings.available.timezone) / 60 ||
      new Date().getUTCHours() >=
        settings.available.untilHour +
          getTimezoneOffset(new Date(), settings.available.timezone) / 60
    ) {
      $(fancyMarkup).find(".fancyMessenger-available").hide();
    }
    fancyParent.each(function () {
      var thisElm = $(this);
      var fancyElm = fancyMarkup.appendTo(thisElm);
      $(fancyElm)
        .first()
        .find("button")
        .click(function (event) {
          event.preventDefault();
          var errors = 0;
          $(fancyElm)
            .find("input[type=email]")
            .each(function () {
              if (!$(this).val() || !$(this)[0].validity.valid) {
                $(this)
                  .closest(".fancyMessenger")
                  .find(".fancyMessenger-info")
                  .html(settings.text.invalidEmail)
                  .fadeIn(600)
                  .delay(3000)
                  .fadeOut(600);
                errors++;
              }
            });
          if (errors) return false;
          if (!settings.onSend(fancyElm)) {
            $(this)
              .closest(".fancyMessenger")
              .find(".fancyMessenger-info")
              .html(settings.text.sendError)
              .fadeIn(600)
              .delay(3000)
              .fadeOut(600);
            return false;
          }
          if (settings.closeOnSend) {
            $(this)
              .closest(".fancyMessenger")
              .find(".fancyMessenger-body")
              .hide();
            $(this)
              .closest(".fancyMessenger")
              .find(".fancyMessenger-text")
              .hide();
          }
          if (settings.collapseOnSend) {
            $(this)
              .closest(".fancyMessenger")
              .find(".fancyMessenger-body")
              .hide();
          }
          $(this)
            .closest(".fancyMessenger")
            .find(".fancyMessenger-info")
            .html(settings.text.sent)
            .fadeIn(600)
            .delay(3000)
            .fadeOut(600);
        });
    });
    // Add stylesheed unless already defined
    if ($(".fancyMessenger-info").css("display") != "none")
      fancyStyleSheet.appendTo($("body").first());
    return this;
  };
  $.fancyMessenger = function (options) {
    $.fn.fancyMessenger(options);
  };
})(jQuery);
