heroku-app-example-midgard
==========================

    heroku apps:create mgd-example
    git init
    git add .
    git commit -m "Initial commit"
    heroku git:remote -a mgd-example
    heroku config:add BUILDPACK_URL=https://github.com/ddollar/heroku-buildpack-multi.git
    git push heroku master

`.buildpack` file contains the list of all buildpacks which should be installed for your heroku slug 

Set at least one process:

    heroku ps:scale web=1
