function getFileExtension(fname) {
    var extenstion = fname.slice((fname.lastIndexOf(".") - 1 >>> 0) + 2);
    if (extenstion)
        fname = extenstion.toUpperCase();
    return fname;
}

(function ($) {
    var fileIcon = "data:image/png;base64,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";
    $.fn.html5Uploader = function (options) {
        var settings = {
            showCount: true,
            showFileName: true,
            showThumbnail: true,
            hasRemovableFiles: true,
            skipDuplicateFileNames: true,
            typeOfFiles: [],
            maxNoOfFiles: 0,
            maxFileSize: 0,
            messageTransitionTime: 300,
            messageVisibleTime: 10000
        };
        if (options) {
            $.extend(settings, options);
        }
        return this.each(function () {
            var $ele = $(this);
            var $input = $ele.find('input[type="file"]');
            var $target = $ele.find('.fieldFileUploadThumbnails');
            if ($target.length === 0) {
                $target = $('<div/>').addClass('fieldFileUploadThumbnails').appendTo($input.closest('.fieldFileUpload').find('.imageFieldValueEditor'));
            }
            $target.html('');
            $ele.data('files', []);
            $ele.data('fileNames', []);
            $ele.find('a.fieldFileUploadlLink').bind('click', function () {
                $input.click();
            });
            $input.bind('click', function () {
                try {
                    $input.val('');
                } catch (err) {
                }
                console.log($input.val());
            }).bind('change', function () {
                $target.html('');
                $ele.data('files', []);
                $ele.data('fileNames', []);
                $.each(this.files, function () {
                    fileHandler($ele, this);
                });
                $ele.trigger('change');
            });
            $ele.bind("dragenter dragover", function (e) {
                e.preventDefault();
                $(this).addClass("hover");
                return false;
            }).bind("dragleave", function (e) {
                e.preventDefault();
                $(this).removeClass("hover");
                return false;
            }).bind("drop", function (e) {
                e.preventDefault();
                $(this).removeClass("hover");
                var files = e.originalEvent.dataTransfer.files;
                for (var i = 0; i < files.length; i++) {
                    fileHandler($ele, files[i]);
                }
                $ele.trigger('change');
                return false;
            }).bind('change', function (e) {
                e.preventDefault();
                var $countLbl = $ele.find('.field-label label .countLabel');
                if ($countLbl.length === 0) {
                    $countLbl = $('<span class="countLabel" />').appendTo($ele.find('.field-label label'));
                }
                if (settings.showCount) {
                    var lbl = '';
                    if ($ele.data('files').length) {
                        lbl = ' (' + $ele.data('files').length + ' files selected)';
                    }
                    $countLbl.html(lbl);
                }
            });

            /***/
            $('body').bind("dragenter dragover", function (e) {
                e.preventDefault();
                e.originalEvent.dataTransfer.dropEffect = "none";
            });
        });
        function fileHandler($ele, file) {
            if (!file.size && !file.type) {
                return;
            }
            if (settings.typeOfFiles.length > 0 && $.inArray(getFileExtension(file.name).toLowerCase(), settings.typeOfFiles) < 0) {
                showFileUploadMessage('<b>' + file.name + '</b>' + ' can not be uploaded, beacause it is not type of (<i>' + settings.typeOfFiles.join(' / ') + '</i>)');
                return;
            }
            if (settings.maxNoOfFiles > 0 && $ele.data('files').length === settings.maxNoOfFiles) {
                showFileUploadMessage('<b>' + file.name + '</b>' + ' can not be uploaded. Maximum <i>' + settings.maxNoOfFiles + '</i> files can be uploaded.');
                return;
            }
            if (settings.maxFileSize > 0 && (file.size / 1024 > settings.maxFileSize)) {
                showFileUploadMessage('<b>' + file.name + '</b>' + '(' + (file.size / 1024).toFixed(2) + 'KB)' + ' can not be uploaded. Maximum file size <i>' + settings.maxFileSize + 'KB</i> is allowed.');
                return;
            }
            if (settings.skipDuplicateFileNames) {
                if ($.inArray(file.name, $ele.data('fileNames')) < 0) {
                    $ele.data('fileNames').push(file.name);
                } else {
                    showFileUploadMessage('<b>' + file.name + '</b> can not be uploaded. Files with different names are allowed.');
                    return;
                }
            }
            var $target = $ele.find('.fieldFileUploadThumbnails');
            $ele.data('files').push(file);
            var $thmbnail = $('<div class="thumbnail"></div>').attr('title', file.name);
            $thmbnail.appendTo($target);
            if (!file.type.match('image.*')) {
                addOrRemoveThumnail(file, $thmbnail, $ele);
            } else {
                var reader = new FileReader();
                reader.onload = function (e) {
                    addOrRemoveThumnail(file, $thmbnail, $ele, e);
                };
                reader.readAsDataURL(file);
            }
            postFile(file, $thmbnail);
        }
        function addOrRemoveThumnail(file, $thmbnail, $ele, e) {
            if (e && settings.showThumbnail) {
                $('<img class="thumbnail" />').attr({'src': e.target.result}).appendTo($thmbnail);
            } else {
                $('<img class="thumbnail" />').attr({'src': fileIcon}).appendTo($thmbnail);
                $('<span class="file-type" />').text(getFileExtension(file.name)).appendTo($thmbnail);
            }
            if (settings.showFileName) {
                $('<span class="file-name" />').text(file.name).appendTo($thmbnail);
                $thmbnail.addClass('showingFileName');
            }
            if (settings.hasRemovableFiles) {
                $('<span class="thumbnail-remove" title="Remove file \'' + file.name + '\'" />').html('&times;').appendTo($thmbnail);
            }

            $thmbnail.find('.thumbnail-remove').click(function () {
                $ele.data('files').pop(file);
                $ele.data('fileNames').pop(file.name);
                $thmbnail.remove();
                $ele.trigger('change');
                removeFile(file);
            });
        }

        function postFile(file, $thmbnail) {
            if (!settings.url) {
                return;
            }
            var $progressBar = $('<div class="progress-bar" />').appendTo($thmbnail);
            var fileData = new FormData();
            if (file) {
                fileData.append('file', file);
            }
            var xhrParams = {
                url: settings.url,
                data: fileData,
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST', // For jQuery < 1.9
                success: function (res) {
//                    $('body').append('<div>' + res + '</div>');
                },
                error: function (data) {
                }, progress: function (e) {
                    if (e.lengthComputable) {
                        $progressBar.width((e.loaded / e.total) * 100 + '%');
                    }
                }, xhr: function () {
                    var xhr = new window.XMLHttpRequest();
                    xhr.addEventListener("progress", function (evt) {
                        xhrParams.progress(evt);
                    }, false);
                    xhr.upload.addEventListener("progress", function (evt) {
                        xhrParams.progress(evt);
                    }, false);
                    return xhr;
                }
            };
            $.ajax(xhrParams);
        }

        function removeFile(file) {
            if (!settings.url) {
                return;
            }
            $.ajax({
                url: settings.url,
                data: {fileName: file.name},
                method: 'POST',
                type: 'POST'
            });
        }

        function showFileUploadMessage(msg) {
            var ul_id = 'showFileUploadMessage', $ul = $('#' + ul_id);
            if ($ul.length === 0) {
                $ul = $('<ul />', {id: ul_id}).appendTo('body');
            }
            var $li = $('<li />').html(msg).append($('<span />').html('&times;').click(function () {
                setMessageTimeout();
            })).appendTo($ul);
            $li.show(settings.messageTransitionTime);
            setTimeout(function () {
                setMessageTimeout();
            }, settings.messageVisibleTime);
            var setMessageTimeout = function () {
                $li.hide(settings.messageTransitionTime);
                setTimeout(function () {
                    $li.remove();
                    if ($ul.find('li').length === 0) {
                        $ul.remove();
                    }
                }, settings.messageTransitionTime);
            };
        }
    };
    $('.fieldFileUpload').html5Uploader({url: 'uploadFile.php', showCount: true, showFileName: false, showThumbnail: true, hasRemovableFiles: true, typeOfFiles: ['jpg', 'jpeg', 'gif', 'png', 'js'], maxNoOfFiles: 2, maxFileSize: 130});
})(jQuery);


