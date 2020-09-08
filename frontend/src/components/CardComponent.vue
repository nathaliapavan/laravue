<template>
    <div class="main-card">

        <div class=" content top">
            <h3>{{ type }}</h3>
            <p class="percent"><i class="fa fa-arrow-up"></i>{{ percent }}</p>
        </div>

        <div class="content footer">
            <i :class="['fa icon', icon]"></i>
            <p class="qty">{{ qty }}</p>
        </div>

    </div>
</template>

<script>
export default {
    name: 'CardsComponent',
    props: {
        type: String,
        percent: String,
        icon: String,
        qty: String
    }
    
}
</script>

<style lang="scss" scoped>
@import '@/assets/scss/_main';
.main-card {
    display: flex;
    flex-direction: column;
    width: 100%;
    background-color: $purple-dark;
    padding: 15px;
    border-radius: 7px;
    color: $white;

    .content {
        display: flex;
        justify-content: space-between;
    }

    .top {
        .percent {
            color: $green
        }
    }

    .footer {
        .icon {
            font-size: 35px;
        }

        .qty {
            font-size: 25px;
            margin: 0;
        }
    }
}

</style>