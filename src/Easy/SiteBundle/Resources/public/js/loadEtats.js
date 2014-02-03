$(function() {
    $.get(
            linkLoadEtats,
            null,
            function(data) {
                data = JSON.parse(data);
                console.log(data);

                panel = $($("#etats > .panel-body")[0]);
                panel.addClass("panel-list-group");
                panel.empty();

                ul = document.createElement("ul");
                $(ul).addClass("list-group");

                li = document.createElement("li");
                $(li).addClass("list-group-item");

                if (typeof data != 'undefined') {
                    if (data['infos']['Players'] > 0) {
                        $(li).addClass("tooltip-state");
                        $(li).attr("data-tooltip", data['players']);
                    }

                    spanBadge = document.createElement("span");
                    $(spanBadge).addClass("badge");
                    $(spanBadge).text(data['infos']['Players']);
                    if (data['players'] != false) {
                        $(spanBadge).attr('title', data['players'])
                    }

                    $(li).append('<span class="label label-success"><i class="fa fa-thumbs-up"></i></span>');
                    $(li).append(' <span title="' + data['infos']['HostName'] + '">Minecraft Survival</span>');
                    $(li).append(spanBadge);
                } else {
                    $(li).append('<span class="label label-danger"><i class="fa fa-thumbs-down"></i></span>');
                    $(li).append(' <span title="">Minecraft Survival</span>');
                }

                $(ul).append(li);
                panel.append(ul);
            }
    );
});