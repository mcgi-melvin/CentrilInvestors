function showMenu() {
    const menu = jQuery('#mobile_menu'),
        button = jQuery('header .mobile-menu')

    menu.toggleClass('hidden flex')

    console.log( button.find('.bar') )

    button.find('.bar').toggleClass('hidden')
    button.find('.close').toggleClass('hidden')
}