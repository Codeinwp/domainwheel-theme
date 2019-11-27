/* jshint node:true */
//https://github.com/kswedberg/grunt-version
module.exports = {
    package_ti: {
        options: {
            prefix: '"version"\\:\\s+"'
        },
        src: 'package.json'
    },
    style: {
        options: {
            prefix: 'Version\\:\\s+'
        },
        src: 'style.css'
    },
    functions: {
        options: {
            prefix: 'DW_VERSION\',\\s+\''
        },
        src: 'functions.php'
    }
};