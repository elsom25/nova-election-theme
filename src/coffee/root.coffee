hover_border_link = ($link_el, $border_el, base_c, hover_c) ->
  $link_el.hover(
    (_) -> $border_el.css 'border-color': hover_c
    (_) -> $border_el.css 'border-color': base_c
  )

acts_as_dumb_link = ($el) ->
  $el.click -> $(this).find('a:first').click()
acts_as_link = ($el) ->
  $el.click ->
    $a = $(this).find('a:first')
    url = $a.attr('href')

    if $a.attr('target') == '_blank'
      window.open(url, '_blank')
    else
      window.location.href = url

smooth_scroll = (offset=0) ->
  $("a[href*=#]:not([href=#])").click ->
    if location.pathname.replace(/^\//, '') is @pathname.replace(/^\//, '') and location.hostname is @hostname
      target = $(@hash)
      target = $("[name=#{@hash.slice(1)}]") unless target.length
      if target.length
        $('html, body').animate
          scrollTop: target.offset().top + offset
        , 1000
        return false

campaigning_done = -> new Date() > new Date('02/10/2014 23:00')
is_platform_page = -> window.location.href.indexOf('platform') > -1

show_cta = ($cta) ->
  $cta.show()
  $('body').addClass 'vote-now'

$ ->
  $(document).foundation
    section:
      multi_expand: true

  $('.accordion-no-expand').foundation
    section:
      multi_expand: false

  hover_border_link $('.blog-cta'), $('#blog-border'), $('#blog-border').css('border-color'), '#222'
  acts_as_link $('.acts-as-link')

  $('#to-top').click (e) ->
    e.preventDefault()
    $('body').animate scrollTop: 0

  if campaigning_done()
    show_cta $( '#vote-cta' )
    acts_as_dumb_link $( '#vote-cta' )
    if !sessionStorage.hidemodal
      sessionStorage.hidemodal = true
      $('#voteModal').foundation('reveal', 'open')

  $endorsement_collection = $('#endorsement-collection')
  $endorsement_collection.imagesLoaded ->
    $endorsement_collection.isotope
      itemSelector: '.endorsement'
      filter: '*'
      masonry:
        columnWidth: 495

  $('#endorsement-filters a').click (e) ->
    e.preventDefault()
    $parent = $( this ).parent()
    selector = $( this ).data( 'filter' )

    $endorsement_collection.isotope filter: selector
    $parent.siblings().removeClass('active')
    $parent.addClass('active')

  $('#platform-filters a').click (e) ->
    # DO NOT e.preventDefault()
    $parent = $( this ).parent()
    selector = $( this ).data( 'filter' )
    $siblings = $parent.siblings()
    sibling_selectors = $siblings.find( 'a' ).data( 'filter' )

    $( sibling_selectors ).fadeOut 200, ->
      $( selector ).fadeIn( 400 )
    $siblings.removeClass('active')
    $parent.addClass('active')

  if is_platform_page() && !!window.location.hash
    active_class = window.Foundation.libs.accordion.settings.active_class
    $target = $("#{window.location.hash}")

    $(".active").removeClass 'active'

    if window.location.hash.indexOf('pillar') > 0
      $('#by-portfolio').hide()
      $('#by-pillar').show()
      $('a[data-filter="#by-pillar"]').parent().addClass('active')
    else
      $('#by-pillar').hide()
      $('#by-portfolio').show()
      $('a[data-filter="#by-portfolio"]').parent().addClass('active')

    $target.addClass 'active'
    $('html, body').animate scrollTop: $target.offset().top - 150
