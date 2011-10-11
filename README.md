
So I have a collection of my songs in my MacBook and I play it out loud. And now I'm working on my Linux machine, but I want to know the song that's currently
playing without having to look at my MacBook. So I created this little script.

    sudo apt-get install libnotify-bin

and then

	./remote-itunes-notify <hostname>

Where `<hostname>` is the IP or hostname of your Mac. It must have SSH server open, and you must add your Linux public key to the Mac's `~/.ssh/authorized_keys`,
or else it will ask your password every 10 seconds! :)


