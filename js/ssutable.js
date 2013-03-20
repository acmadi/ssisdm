/*[jQuery Plugin,Table Navigation and Manipulation,version 1.0,copyright A. Sonhaji,Sintesa Solusi Utama,23/07/2011]*/        
(function($) {
  $.ssutable = function(t) {
    var lastcell = null;
    var settings = {
      log: null,
      dialog: null,
      editondblclick: true,
      onblur: function() {},
      ondblclick: function() {},
      onchange: function() {},
      onclick: function() {},
      onfocus: function() {},
      onkeydown: function() {},
      onmove: function() {}
    };
    var self = $('tbody', t); // table or table tbody?
    self.data('table', this);
    this.init = function(options) {
      if (options) {
        options = $.extend(settings, options);
      }
      
      var css = {
        'display': 'inline-block',
        'width': '99%',
        'height': '100%',
        'border': '0px',
        'background-color': 'yellow',
        'text-align': 'right',
        'margin': '0px'
      }
      $(window).delegate('input._cell_ipe', 'blur', function(e) {
        options.log.text('input blur');
        // when this lost focus, it has to return his value to its parent
        var p = $(this.parentNode);
        var text = $(this).data('text');
        //p.focus(); I don't know which dom el gets focus
        //setTimeout(function() { _cell_ipe = $(this).detach(); }, 1);
        _cell_ipe = $(this).detach();
        p.text(text);
        p.parent().removeClass('notice');
      });
      
      // in place editor
      var _cell_ipe = $('<input type="text" class="_cell_ipe" value=""></input>');
      _cell_ipe.css(css);
      _cell_ipe.keydown(function (e) {
        var k = e.keyCode || e.charCode || e.which || -1;
        switch (k) {
          case 13: case 27:
            var me = $(this);
            var p = $(this.parentNode); // the more general is using .closest('td')
            var v, oldv = $(this).data('text') || '';
            if (k == 13) {
              v = me.val();
              p.focus();
              _cell_ipe = $(this).detach();
              p.text(v);
              options.onchange(oldv, v, p);
            } else {
              p.focus();
              $(this).blur();
              //$(this).detach();
              //p.text(oldv);
            }
            return false;
            break;
        }
        e.stopPropagation();
      }).click(function(e) {
        e.stopPropagation();
      }).dblclick(function(e) {
        e.stopPropagation();
      });
      // this code below is actualy part of my nmtable jQuery plugin
        
      self.delegate("td", "focus", function(e) {
        //if (row) row.removeClass('notice');
        $(this.parentNode).addClass('notice');
        lastcell = $(this);
        options.onfocus(e);
      }).delegate("td", "click", function(e) {
        $(this).focus();
        options.onclick(e);
        return false;
      }).delegate('td', 'dblclick', function(e) {
        if (options.editondblclick) {
          var me = $(this);
          if (options.dialog) {
            // open dialog
          } else if (me.hasClass("editable")) {
            options.log.text('edit cell');
            var text = me.text(); 
            // or get data from me.data('text'); should provide option for this possibility
            // if (options.source = 'text') text = me.text(); else text = me.data('text');
            _cell_ipe.css('height', $(this).height()).css('width', $(this).innerWidth());
            _cell_ipe.data('text', text); // store original text data
            me.empty().append(_cell_ipe);
            _cell_ipe.val(text).focus().select();
            //return false;
          }
        } else
          options.ondblclick(e);
        return false;
        //options.ondblclick(e);
        //return false;
      }).delegate("td", "blur", function(e) {
        $(this.parentNode).removeClass('notice');
        options.onblur(e); //lost focus
        e.stopPropagation();
        //return false;
      }).delegate("td", "keydown", function(e) {
        var k = e.keyCode || e.charCode || e.which || -1;
        var me = $(this);
        switch(k) {
          case 13:
            if (options.dialog) {
              // open dialog
            } else if (me.hasClass("editable")) {
              var text = me.text(); 
              // or get data from me.data('text'); should provide option for this possibility
              // if (options.source = 'text') text = me.text(); else text = me.data('text');
              _cell_ipe.css('height', $(this).height()).css('width', $(this).innerWidth());
              _cell_ipe.data('text', text); // store original text data
              me.empty().append(_cell_ipe);
              _cell_ipe.val(text).focus().select();
              return false;
            }
            break;
          case 27:
            e.stopPropagation(); 
            // trigger onblur
            me.blur();
            //$('#bappb-dlg').parent().find('button').eq(0).focus();
            //console.log($('#bappb-dlg').parent().find('button').eq(0));
            break;
          case 38:
            // on before move
            var p = this.parentNode;
            var ci = this.cellIndex;
            var ri = p.rowIndex;
            p = $(p);
            var p = me.parent().prevAll(':visible:first');
            if (p[0]) {
              $(p[0].cells[ci]).focus();
              options.onmove(me, $(p[0].cells[ci]));
            }
            return false;
            break;
          case 40:
            // on before move
            var p = this.parentNode;
            var ci = this.cellIndex;
            var ri = p.rowIndex;
            p = $(p);
            var p = me.parent().nextAll(':visible:first');
            if (p[0]) {
              $(p[0].cells[ci]).focus();
              options.onmove(me, $(p[0].cells[ci]));
            }
            return false;
            break;
          case 37: // arrow-left
            // on before move
            var prev = $(this).prev();
            if (prev.length) {
              prev.focus();
              options.onmove(me, prev);
            }
            return false;
            break;
          case 39: // arrow-left
            // on before move
            var next = me.next();
            if (me.length) {
              next.focus();
              options.onmove(me, next);
            }
            return false;
            break;
          case 45: // insert
            break;
          case 46: // del
            //e.stopPropagation();
            break;
        }
        // on keydown, we intercept CRLF & all Arrow Keys and propagate the rest
      });
    }
    
    this.insert = function(row, index) {
      if (index) {
        var r = $().eq(index);
        $(row).insertBefore(r);
      } else {
        $().append(row);
      }
      // oninsert(row);
    }
    
    this.remove = function(row) {
      if (is_number(row))
        var row = $().eq(row);
      r.detach();
      ondelete(r);
      if (r) r.remove();
    }
    
    this.focus = function(cell) { // there should be last cell
      if (!cell) {
        lastcell = lastcell || self.find('td:first');
        $(lastcell).focus();
      } else
        $(cell).focus();
    }
    
    this.get = function(row, col) {
      return self.find('tr').eq(row).find('td').eq(col);
    }
    
    this.editable = function(row, col) {
      if (!col || col < 0)
        self.find('tr').eq(row).addClass('editable');
      else if (row < 0)
        self.find('td:nth-child(' + col + ')').addClass('editable');
      else
        self.find('tr').eq(row).find('td').eq(col).addClass('editable');
    }
  }
  
  $.fn.ssutable = function(method) {        
    var args = arguments;
    return this.each(function() {
      if ( typeof method === 'object' || ! method ) {
        var table = new $.ssutable(this);
        table.init(method);
      } else {
        var table = $(this).data('table');
        if (table[method]) {
          table[method].apply(table, Array.prototype.slice.call( args, 1 ));
        } else {
          $.error( 'Method ' +  method + ' does not exist on jQuery.nmtable' );
        }
      }
    })
  }
})(jQuery);