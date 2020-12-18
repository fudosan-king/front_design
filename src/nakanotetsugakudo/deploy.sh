#!/bin/sh
rsync -rlpcgoDvz --delete --exclude-from=excludes ./ php.intra.fudosan-king.jp:/data_web/truongtam217/nakanotetsugakudo
