import Vue from 'vue'

// Substring
Vue.filter('substring', function (value) {
    if (!value) return ''
    value = value.toString()
    return value.substring(0, 10) + '...'
})

// Replace 
Vue.filter('replace_', function (value) {
    if (!value) return ''
    value = value.toString()
    return value.replace('_', ' ')
})

