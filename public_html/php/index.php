<?php

/* Prevents indexing. Kick users out of this folder, and back home */
header("Location: /", true, 301);