# repository info
set :branch, "master"

# This may be the same as your `Web` server
role :app, "ccistaging.com"

# directories
set :deploy_to, "/home/staging/subdomains/ta"
set :public, "#{deploy_to}/public_html"
set :extensions, %w[com_files com_slideshow plg_ie6 public template]
