<template>
    <div class="relative">
        <el-upload
            class="hd-image-uploader-mul"
            :action="action"
            :show-file-list="false"
            :on-success="handleAvatarSuccess"
            :before-upload="beforeAvatarUpload"
            :headers="headers"
            :multiple="true"
        >
            <i class="el-icon-plus hd-image-uploader-mul-icon"></i>
        </el-upload>
        <i class="fas fa-window-close absolute fa-2x text-white top-2 left-2 cursor-pointer"></i>
    </div>
</template>

<script>
export default {
    props: {
        sid: { default: '' },
        type: {
            type: Array,
            default() {
                return ['image/jpeg', 'image/png']
            }
        },
        size: { type: Number, default: 1024 * 1024 * 2 }
    },
    data() {
        return {
            imageUrl: this.value
        }
    },
    watch: {
        value(n) {
            this.imageUrl = n
        }
    },
    computed: {
        action() {
            return this.sid ? `/api/upload?site=${this.sid}` : `/api/upload`
        },
        headers() {
            return {
                // Authorization: `Bearer ${this.$store.getters.token}`,
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }
    },
    methods: {
        handleAvatarSuccess(res, file) {
            this.imageUrl = res.path
            this.$emit('upload', this.imageUrl)
        },
        beforeAvatarUpload(file) {
            const isType = this.type.includes(file.type)
            const isSize = file.size < this.size
            if (!isType) {
                this.$message.error('文件类型错误')
            }
            if (!isSize) {
                this.$message.error(`上传文件不能超过${Math.round(this.size / 1024)}KB`)
            }
            return isType && isSize
        }
    }
}
</script>

<style lang="scss">
.hd-image-uploader-mul {
    .el-upload {
        border: 1px dashed #d9d9d9;
        border-radius: 6px;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        &:hover {
            border-color: #409eff;
        }
    }
    .hd-image-uploader-mul-icon {
        font-size: 28px;
        color: #8c939d;
        width: 100px;
        height: 100px;
        line-height: 100px;
        text-align: center;
    }
    .avatar {
        width: auto;
        height: 100px;
        display: block;
        background: #f3f3f3;
    }
}
</style>
