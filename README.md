heroku-app-example-midgard
==========================

Add multiple buildpack to your app

    heroku config:add BUILDPACK_URL=https://github.com/ddollar/heroku-buildpack-multi.git

`.buildpack` file contains the list of all buildpacks which should be installed for your heroku slug 
