import {
    LightningElement,
    api
} from 'lwc';

export default class TrailheadScoreCard extends LightningElement {
    @api t_username = 'TEST';
    get trailScoreCardLink() {
        return 'https://superqbit.com/trailhead?uid=' + this.t_username;
    }
}
